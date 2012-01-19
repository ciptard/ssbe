<?php

/**
 *
 * SSBE Admin. Where you can manage your blog.
 *
 * SSBE : Super Simple Blog Engine (http://ruiposse.com/ssbe)
 *
 * @author		Rui Posse (http://ruiposse.com)
 * @email		ruiposse@gmail.com
 * @copyright	Copyright 2011, Rui Posse (http://ruiposse.com)
 * @license		
 * @filename	admin.php
 * @since		SSBE(tm) v 0.2
 * @date		Wed Jun 1 22:28 2011
 */


/* TODO
------------------------------ */
// . 


/* Validate session
------------------------------ */
include("session.php");
validate_session();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>SSBE Admin</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="http://code.jquery.com/jquery-1.5.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	
	<!-- Header
	.............................. -->
	
	<header id="header">
		
		<br>
		<center><h1>SSBE Admin Panel</h1></center>
		<br>
		<br>
		
		<!-- Feedback -->
		
		<?php		
			if( $_GET["success"] == 1)
				echo "<div style='text-align: center; background-color:#ffa; width: 30%; padding:20px; margin-top: 10px; margin: 0 auto;'>SUCCESS! SSBE was installed!</div>";
		?>
		
		<!-- User info and "nav" -->	
		
		<br>
		Welcome <?php echo "<b>"; echo $_SESSION['username']; echo "</b>"; ?>,<br>
		<br>
		<a style="float: left" href="http://ruiposse.com/ssbe/development/">index()</a><a style="float: right" href="logout.php">logout()</a><br>
		<br>
		
	</header>
	
	
	<!-- Content
	.............................. -->
	
	<section id="content">
	
		<hr>
		<div id="form-main">
		</div>
		<br>
	
		<hr>
		<b>Post List:</b>
		<br>
		Edit post (id_post): <input id="idpost" type="text" size="10" name="id_post">
	
		<form method="POST" action="aux/admin-aux.php">
			Delete post (id_post): <input type="text" size="10" name="id_post"><input type="submit" />
							   	   <input type="hidden" name="hidden" value="deletepost" />
		</form>
		<br>
		
		<div id="listposts">
		</div>

		<div id="listpostsnav">
			<button type="button" id="back">back</button> | <button type="button" id="next">next</button>
		</div>
		
	</section>

	
	<!-- Footer
	.............................. -->
	
	<footer id="footer">
	
		<br>
		<br>
		<br>
		<br>
		
	</footer>


	<!-- TODO -->
	<script src="js/admin.js"></script>
			
</body>

</html>