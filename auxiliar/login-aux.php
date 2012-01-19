<?php

/**
 *
 * Auxiliar file for login.php.
 *
 * SSBE : Super Simple Blog Engine (http://ruiposse.com/ssbe)
 *
 * @author		Rui Posse (http://ruiposse.com)
 * @email		ruiposse@gmail.com
 * @copyright	Copyright 2011, Rui Posse (http://ruiposse.com)
 * @license		
 * @filename	login-aux.php
 * @since		SSBE(tm) v 0.2
 * @date		Sat May 28 15:10:36 2011
 */
 

/* TODO
------------------------------ */
// . 


/* Session Login
------------------------------ */
include("../engine/sql.php");

$user = $_POST["user"];
$pass = $_POST["password"];
$pass = sha1($pass);

$query = query("SELECT username, password FROM Users WHERE username = '$user'");

if($query != false) {

	while( $row = mysql_fetch_array($query) ) {
	
		if ($pass == $row["password"]) {
			session_start();
			$_SESSION['username']= $user;
			header("location: ../admin.php");
			exit;
		}
		else {
			header("location: ../login.php?error=1");
			exit;
		}
	}
	
	// nothing fetched
	header("location: ../login.php?error=1");
	exit;
	
} else {
	header("location: ../login.php?error=1");
	exit;
}

?>