<?php

/**
 *
 * Needed forms.
 *
 * SSBE : Super Simple Blog Engine (http://ruiposse.com/ssbe)
 *
 * @author		Rui Posse (http://ruiposse.com)
 * @email		ruiposse@gmail.com
 * @copyright	Copyright 2011, Rui Posse (http://ruiposse.com)
 * @license		
 * @filename	engine-forms.php
 * @since		SSBE(tm) v 0.2
 * @date		Sat May 28 15:10:36 2011
 */
 

/* TODO
------------------------------ */
// . re-think div List Posts on admin.php
// . 

?>

<!-- Form for New Post
.............................. -->

<div id="newPostForm">

	<b>New Post:</b>
	<form method="POST" action="aux/admin-aux.php">
		<input type="text" size="50" placeholder="Title" name="title">
		<br>
		<input type="url" size="50" placeholder="UR"L name="url">
		<br>
		<textarea rows="20" cols="75" placeholder="The post ..." name=post></textarea>
		<br>
		<input type="hidden" name="hidden" value="newpost">
		<input type="reset">
		<input type="submit">
	</form>
	
</div>


<!-- Form for Post Edit
.............................. -->

<div id="editPostForm">

	<?php
		include('sql.php');

		$id_post = $_POST["id_post"];
		$result = query("SELECT title, url, post, timestamp FROM Posts WHERE id_post='$id_post'");
		$row = mysql_fetch_array($result);
	
		$title = $row['title'];
		$post = $row['post'];
		$url = $row['url'];
				
		$form = "
			<b>Edit Post:</b>
		
			<form id='editpost' method='POST' action='aux/admin-aux.php'>
			<input type='text' size='50' name='title' value='$title'>
			<br>
			<input type='url' size='50' name='url' value='$url'>
			<br>
			<textarea cols='75' rows='20' name='post'>$post</textarea>
			<br>
			<input type='hidden' name='hidden' value='editpost'>
			<input type='hidden' name='id_post' value='$id_post'>
			<input type='reset'>
			<input type='submit'>
			</form>
				";
				
		echo $form;
	?>
	
</div>


<!-- ....................................
................. AUX ...................
......................................... -->


<!-- List Posts on admin.php
.............................. -->

<div id="listposts">

	<?php
		$query = query('SELECT id_post, title, url, post, timestamp, status
					FROM Posts ORDER BY timestamp DESC LIMIT 20 OFFSET ' . $_POST["offset"]);
		
		echo "<table border='1'>";
		echo "<tr><td>id_post</td><td>title</td><td>url</td><td>timestamp</td><td>status</td>";
	
		while( $row = mysql_fetch_array($query) ) {
			echo "<tr>";
			echo "<td>" . $row['id_post'] . "</td><td>" . $row['title'] . "</td><td>" . $row['url'] . "</td><td>"
				 . date('Y-m-d, H:i:s', $row['timestamp']) . "</td><td>" . $row['status'] . "</td>";
			echo "</tr>";
		}

		echo "</table>";
	?>

</div>