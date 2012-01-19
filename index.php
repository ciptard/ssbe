<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/HTML" lang="en" xml:lang="en">

<head>
	<meta charset="utf-8" />
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="http://code.jquery.com/jquery-1.5.js"></script>
	
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<meta charset="utf-8" />
	
	<script type="text/javascript">
       document.createElement("'header'");
       document.createElement("'nav'");
       document.createElement("'article'");
       document.createElement("'section'");
       document.createElement("'footer'");
     </script>
	
	<?php include("engine.php"); ?>
</head>


<body>
	
	<!-- Header
	.............................. -->
	
	<header id="header">
			
			<div id="title">
				<h1>Super Simple Blog Engine</h1>
			</div>

			<nav id="nav">
				<ul>
					<li style="background:none"><a href="http://ruiposse.com/ssbe">HOME</a></li>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="download.html">DOWNLOAD</a></li>
					<li><a href="contact.html">CONTACT</a></li>
				</ul>
			</nav>
					
	</header>
	
	
	<!-- Content
	.............................. -->
	
	<section id="content">
		
		<?php posts(); ?>
	
	</section>
	

	<!-- Footer
	.............................. -->
	<footer id="footer">	
		<p align="center">Rui Posse &copy; 2011 | Powered by <a href="http://ruiposse.com/ssbe/">Super Simple Blog Engine</a></p>
		<br>
	</footer>

</body>

</html>