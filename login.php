<?php

/**
 *
 * Login into SSBE Admin.
 *
 * SSBE : Super Simple Blog Engine (http://ruiposse.com/ssbe)
 *
 * @author		Rui Posse (http://ruiposse.com)
 * @email		ruiposse@gmail.com
 * @copyright	Copyright 2011, Rui Posse (http://ruiposse.com)
 * @license		
 * @filename	login.php
 * @since		SSBE(tm) v 0.2
 * @date		Wed Jun 1 22:28 2011
 */


/* TODO
------------------------------ */
// . Another way to destroy any existing sessions
// . 


/* Destroy any existing session
------------------------------ */
session_start();
session_unset();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>SSBE Admin Login</title>
</head>

<body>

	<!-- Header
	.............................. -->
	
	<header id="header">
		
		<br>
		<center><h1>SSBE Admin Panel</h1></center>
		<br>
		<br>
		<br>
		
	</header>
	
	
	<!-- Content
	.............................. -->
	
	<section id="content">
	
		<hr>
		<b>Login:</b>
		<br>
		<br>
		<form id="form-login" method="POST" action="aux/login-aux.php">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" size="25" name="user" /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" size="25" name="password" /></td>
				</tr>
			</table>
			<br>
			<input type="submit" /><input type="reset" />
			<br>
			<hr>
			
			<!-- Feedback -->	
			<?php		
				if($_GET["error"] == 1)
					echo "<div style='text-align: center; background-color:#f50; width: 30%; padding:20px; margin-top: 10px; margin: 0 auto;'>ERROR! Wrong username or password.</div>";
				if($_GET["error"] == 3)
					echo "<div style='text-align: center; background-color:#f50; width: 30%; padding:20px; margin-top: 10px; margin: 0 auto;'>ERROR! Please login first.</div>";
			?>
		</form>
	
	</section>

	
	<!-- Footer
	.............................. -->
	
	<footer id="footer">
	
		<br>
		<br>
		<br>
		<br>
		
	</footer>

</body>

</html>