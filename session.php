<?php

/**
 *
 * Sessions handling for SSBE.
 *
 * SSBE : Super Simple Blog Engine (http://ruiposse.com/ssbe)
 *
 * @author		Rui Posse (http://ruiposse.com)
 * @email		ruiposse@gmail.com
 * @copyright	Copyright 2011, Rui Posse (http://ruiposse.com)
 * @license		
 * @filename	session.php
 * @since		SSBE(tm) v 0.2
 * @date		Sat May 28 15:10:36 2011
 */


/* TODO
------------------------------ */
// . 


/* Sessions
------------------------------ */

/**
 * Session Validator.
 *
 * If a user is not logged stops execution.
 */
function validate_session() {
	session_start();
	if (!isset($_SESSION['username'])) {
		logout();
	}
}


/**
 * Session Logout.
 *
 * Destroys a session or a thought of a session.
 */
function logout() {
	session_start();
	session_unset();
	session_destroy();
	header("location: login.php");
	exit;
}

?>