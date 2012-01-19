<div id="newPostForm">

	<b>New Post:</b>
	<form method=POST action=admin-aux.php>
	<input type=text size=50 placeholder=Title name=title>
	<br>
	<input type=url size=50 placeholder=URL name=url>
	<br>
	<textarea rows=20 cols=75 placeholder='The post ...' name=post></textarea>
	<br>
	<input type=hidden name=hidden value=newpost>
	<input type=reset>
	<input type=submit>
	</form>	
	
</div>

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
		
			<form id=editpost method=POST action='admin-aux.php'>
			<input type=text size=50 name=title value='$title'>
			<br>
			<input type=url size=50 name=url value='$url'>
			<br>
			<textarea cols=75 rows=20 name=post id=post>$post</textarea>
			<br>
			<input type=hidden name=hidden value=editpost>
			<input type=hidden name=id_post value='$id_post'>
			<input type=reset>
			<input type=submit>
			</form>
				";
	
		echo $form;
		
	?>
	
</div>