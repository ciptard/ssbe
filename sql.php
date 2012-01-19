<?php

/************
* Title: sql.php for SSBE
* Author: ruiposse.com
* Email: ruiposse@gmail.com
************/

/* Instructions
------------------------------ */
// username
$username = ""; //your-username-goes-here

//password
$password = ""; //your-password-goes-here

//database name
$database = ""; //database-name-goes-here

/* Code
------------------------------ */
function query($string)
{
	global $username;
	global $password;
	global $database;
		
	$con = mysql_connect('localhost', "$username", "$password");
	
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
  	
	mysql_select_db("$database", $con);
	
	$result = mysql_query($string);
	mysql_close($con);
	
	return $result;
}


function getNumberPosts()
{	
	$query = query("SELECT MAX(id_post) FROM Posts");
	$row = mysql_fetch_array($query);
	
	$num = $row['MAX(id_post)'];	
	
	return $num;
}

?>


