<?php

/**
 *
 * Auxiliar file for install.php.
 *
 * SSBE : Super Simple Blog Engine (http://ruiposse.com/ssbe)
 *
 * @author		Rui Posse (http://ruiposse.com)
 * @email		ruiposse@gmail.com
 * @copyright	Copyright 2011, Rui Posse (http://ruiposse.com)
 * @license		
 * @filename	install-aux.php
 * @since		SSBE(tm) v 0.2
 * @date		Sat May 28 15:10:36 2011
 */
 

/* TODO
------------------------------ */
// . 


/* Validate input
------------------------------ */
include("../engine/sql.php");

$blog_username = $_POST["blog_username"];
$blog_password = $_POST["blog_password"];
$blog_password2 = $_POST["blog_password2"];

if($blog_password != $blog_password2){
	header("location: install.php?error=1");
	exit;
}


/* Create Database
------------------------------ */

// Make sure it is a clean database
query("DROP TABLE Comments");
query("DROP TABLE Users");
query("DROP TABLE Posts");

// Create Users table
query("
	CREATE TABLE Users(
		id_user INTEGER AUTO_INCREMENT PRIMARY KEY,
		username TEXT(50),
		password TEXT(50)
	)"
);

// Create Posts table
query("
	CREATE TABLE Posts(
		id_post INTEGER AUTO_INCREMENT PRIMARY KEY,
		title TEXT(2000),
		url TEXT(2048),
		post TEXT,
		timestamp INTEGER,
		status BOOLEAN
	)"
);

// Create Comments table
query("
	CREATE TABLE Comments(
		id_comment INTEGER AUTO_INCREMENT PRIMARY KEY,
		id_post INTEGER,
		username TEXT(50),
		comment TEXT,
		timestamp INTEGER,
		status BOOLEAN,
		FOREIGN KEY (id_post) REFERENCES Users(Posts)
	)"
);


/* Create Admin user
------------------------------ */
$blog_password = sha1($blog_password);
query("INSERT INTO Users (username, password) Values ('$blog_username', '$blog_password')");


/* Start session
------------------------------ */
session_start();
$_SESSION['username'] = $blog_username;
header("location: ../admin.php?success=1");

?>