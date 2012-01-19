<?php

/************
* Title: engine for SSBE-Admin
* Author: ruiposse.com
* Email: ruiposse@gmail.com
************/


//number of posts to show
$num = 5;

//timestamp format
$format = 'Y-m-d, H:i:s';


include("sql.php");


/* Show Posts
------------------------------ */
function posts(){

	global $format;
	
	$query = query("SELECT id_post, title, url, post, timestamp, status FROM Posts ORDER BY id_post DESC");
	
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
	
	echo "<script>location.href='admin.php'</script>";
}


/* Edit Post
------------------------------ */
function editPost(){
	$id_post = $_POST["id_post"];
	
	$title = $_POST["title"];
	$url = $_POST["url"];
	$post = $_POST["post"];
	$timestamp = time();
	
	echo $id_post;
	echo $title;
	echo $url;
	echo $timestamp;
	
	$editPost = "UPDATE Posts SET title='$title', url='$url', post='$post', timestamp='$timestamp', status=0 WHERE id_post='$id_post'";

	$result = query($editPost);

	echo "<script type='text/javascript'>location.href='admin.php'</script>";
}


/* Delete Post
------------------------------ */
function deletePost(){
	$id_post = $_POST["id_post"];

	$deletePost = "UPDATE Posts SET status=1 WHERE id_post='$id_post'";
	$result = query($deletePost);

	echo "<script type='text/javascript'>location.href='admin.php'</script>";
}


/*------------------------------------*\
  AUX
\*------------------------------------*/

/* List Posts on admin.php
------------------------------ */
function listPosts(){

	$query = query("SELECT id_post, title, url, post, timestamp, status FROM Posts");

	echo "<table border=1>";
	echo "<tr><td>id_post</td><td>title</td><td>url</td><td>timestamp</td><td>status</td>";
	
	while( $row = mysql_fetch_array($query) ){
	
		echo "<tr>";
		
		$id = $row['id_post'];
		$title = $row['title'];
		$url = $row['url'];
		$timestamp = $row['timestamp'];
		$timestamp = date('Y-m-d, H:i:s', $timestamp);
		$status = $row['status'];
	
		echo "<td>$id</td><td>$title</td><td>$url</td><td>$timestamp</td><td>$status</td>";
		echo "</tr>";
	}

	echo "</table>";
}

?>