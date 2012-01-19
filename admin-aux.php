<?php

	include("engine.php");

	$opt = $_POST["hidden"];

	switch ($opt) {
    	case "newpost":
    		newPost();
        	break;
	    case "deletepost":
	    	deletePost();
    	    break;
	    case "editpost":
	    	editPost();
    	    break;
	}
	
	
?>