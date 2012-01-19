<?php

/**
 *
 * The SQL. Muscle of SSBE.
 *
 * SSBE : Super Simple Blog Engine (http://ruiposse.com/ssbe)
 *
 * @author		Rui Posse (http://ruiposse.com)
 * @email		ruiposse@gmail.com
 * @copyright	Copyright 2011, Rui Posse (http://ruiposse.com)
 * @license		
 * @filename	sql.php
 * @since		SSBE(tm) v 0.2
 * @date		Sat May 28 15:10:36 2011
 */
 

/* TODO
------------------------------ */
// . 


/*------------------------------------*\
			PLEASE COMPLETE 
\*------------------------------------*/

// Replace database_username_goes_here with your database username
$dbusername = "ruiposse_develop";

// Replace database_password_goes_here with your database password
$dbpassword = "#23masteryoda";

// Replace database_name_goes_here with your database name
$database = "ruiposse_new_blog";


/* MYSQL on PHP
------------------------------ */

/**
 * query()
 * Executes a SQL Query on the configured database.
 */
function query($string) {
	global $dbusername;
	global $dbpassword;
	global $database;
		
	$con = mysql_connect('localhost', $dbusername, $dbpassword);
	
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
  	
	mysql_select_db($database, $con);
	$result = mysql_query($string) OR die( mysql_error() ); 
	
	mysql_close($con);
	return $result;
}


/**
 * getNumberPosts()
 * returns the TOTAL number of posts (active and deleted).
 */
function getNumberPosts() {	
	$query = query("SELECT MAX(id_post) FROM Posts");
	$row = mysql_fetch_array($query);
	
	$num = $row['MAX(id_post)'];	
	
	return $num;
}

?>