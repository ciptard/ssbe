<?php

/**
 *
 * Auxiliar file for admin.php.
 *
 * SSBE : Super Simple Blog Engine (http://ruiposse.com/ssbe)
 *
 * @author		Rui Posse (http://ruiposse.com)
 * @email		ruiposse@gmail.com
 * @copyright	Copyright 2011, Rui Posse (http://ruiposse.com)
 * @license		
 * @filename	admin-aux.php
 * @since		SSBE(tm) v 0.2
 * @date		Sat May 28 15:10:36 2011
 */
 

/* TODO
------------------------------ */
// . 


include("../engine/engine.php");


/* Options
------------------------------ */
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