<?php

/**
 *
 * Install SSBE on your host.
 *
 * SSBE : Super Simple Blog Engine (http://ruiposse.com/ssbe)
 *
 * @author		Rui Posse (http://ruiposse.com)
 * @email		ruiposse@gmail.com
 * @copyright	Copyright 2011, Rui Posse (http://ruiposse.com)
 * @license		
 * @filename	install.php
 * @since		SSBE(tm) v 0.2
 * @date		Wed Jun 1 22:28 2011
 */


/* TODO
------------------------------ */
// . verify if SSBE is already installed.
// . 


/* Basic protection
------------------------------ */
// If someone is logged, don't allow to install again.
session_start();
if (isset($_SESSION['username'])){
	echo "SSBE Already Installed!<br>";
	echo "Please <a href='login.php'>login</a>";
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>SSBE Installation</title>

	<script src="http://code.jquery.com/jquery.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

	<!-- Header
	.............................. -->
	
	<header id="header">
		
		<br>
		<center><h1>SSBE Installation</h1></center>
		<br>
		<br>
		Complete the following steps to install 
		<a href="http://ruiposse.com/ssbe">Super Simple Blog Engine</a> on your host.<br>
		If you need any kind of help, please feel free to <a href="http://ruiposse.com/ssbe/contact.html">contact me</a>.<br>
		<br>
		
	</header>
	
	
	<!-- Content
	.............................. -->
	
	<section id="content">
		
		<hr>
		<b>1. Create Database on your host:</b>
		<ul>
			<li>1. Access your host using cpanel (or other)</li>
			<li>2. Access phpMyAdmin (or equal) available on your host</li>
			<li>3. Create a new database for your blog</li>
			<li>4. Done.</li>
		</ul>
		<br>
		
		<hr>
		<b>2. Database information:</b>
		<ul>
			<li>1. Edit file <b>sql.php</b></li>
			<li>2. Replace <b>database_username_goes_here</b> with your database username</li>
			<li>3. Replace <b>database_password_goes_here</b> with your database password</li>
			<li>4. Replace <b>database_name_goes_here</b> with your database name</li>
			<li>5. Save!</li>
		</ul>
		<br>
		
		<hr>
		<b>3. Create Blog Admin:</b>
		<br>
		<br>
		<form id="form-install" method="post" action="aux/install-aux.php">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" size="25" name="blog_username" required /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input id="password" type="password" size="25" name="blog_password" required /></td>
				</tr>
				<tr>
					<td>Retype Password</td>
					<td><input type="password" size="25" name="blog_password2" required /></td>
				</tr>
			</table>
			<br>
	
			<hr>
			<b>4. Install</b><br><br>
			NOTE: Make sure that step 1 and 2 are successful and that information is in the step 3 form before clicking install.<br><br>
			<input type="submit" value="Install" /><input type="reset" />
			<br><br>
		</form>
		
		
		<!-- Feedback -->
		
		<?php		
			if(isset($_GET["error"]))
				echo "<div style='background-color:#f50; width: 30%; padding:20px; margin-top: 10px; margin: 0 auto;'>ERROR! Passwords does not match.</div>";
		?>	
	
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