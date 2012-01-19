<?php

/**
 *
 * The engine. Heart of SSBE.
 *
 * SSBE : Super Simple Blog Engine (http://ruiposse.com/ssbe)
 *
 * @author		Rui Posse (http://ruiposse.com)
 * @email		ruiposse@gmail.com
 * @copyright	Copyright 2011, Rui Posse (http://ruiposse.com)
 * @license		
 * @filename	engine.php
 * @since		SSBE(tm) v 0.2
 * @date		Sat May 28 15:10:36 2011
 */
 

/* TODO
------------------------------ */
// . function post()
// . timestamp format $format = 'Y-m-d, H:i:s';
// . 

$format = 'Y-m-d, H:i:s';
include("sql.php");


/* Show Posts
------------------------------ */
function posts(){

	global $format;
	
	$query = query("SELECT id_post, title, url, post, timestamp, status FROM Posts ORDER BY timestamp DESC");
	
	echo "<ol id='posts-list'>";
	
	while( $row = mysql_fetch_array($query) ){
		
		$status = $row['status'];
		
		if($status == 0){
			$id = $row['id_post'];
			$title = $row['title'];
			$url = $row['url'];
			$post = $row['post'];
			$timestamp = $row['timestamp'];
			$timestamp = date($format, $timestamp);
			
			//Print the post
			echo "<li><article class='post'>";
			
			echo "<header><h2 class='post-title'><a href='$url'>$title</a></h2></header>";
			echo "<footer class='post-info'>$timestamp</footer>";
			echo "<div class='post-content'>$post</div>";
			
			echo "</article></li>";
			
			echo "<hr>";
		}
	}
	
	echo "</ol>";

}


function post(){
	// TODO
}


/*------------------------------------*\
  				ENGINE
\*------------------------------------*/


/* New Post
------------------------------ */
function newPost(){
	$title = $_POST["title"];
	$url = $_POST["url"];
	$post = $_POST["post"];
	$post = htmlspecialchars($post);
	$timestamp = time();
	$status = 0;

	$newPost = "INSERT INTO Posts (title, url, post, timestamp, status) VALUES ('$title', '$url', '$post', '$timestamp', '$status')";

	$result = query($newPost);
	
	//echo "<script>location.href='admin.php'</script>";
	header("location: ../admin.php");
}


/* Edit Post
------------------------------ */
function editPost(){
	$id_post = $_POST["id_post"];
	$title = $_POST["title"];
	$url = $_POST["url"];
	$post = $_POST["post"];
	$timestamp = time();
	
	$editPost = "UPDATE Posts SET title='$title', url='$url', post='$post', timestamp='$timestamp', status=0 WHERE id_post='$id_post'";

	$result = query($editPost);

	//echo "<script>location.href='admin.php'</script>";
	header("location: ../admin.php");
}


/* Delete Post
------------------------------ */
function deletePost(){
	$id_post = $_POST["id_post"];

	$deletePost = "UPDATE Posts SET status=1 WHERE id_post='$id_post'";
	$result = query($deletePost);

	//echo "<script>location.href='admin.php'</script>";
	header("location: ../admin.php");
}

?>
