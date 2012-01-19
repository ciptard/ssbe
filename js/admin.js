/**
 *
 * JQuery auxiliar file for admin.php.
 *
 * SSBE : Super Simple Blog Engine (http://ruiposse.com/ssbe)
 *
 * @author		Rui Posse (http://ruiposse.com)
 * @email		ruiposse@gmail.com
 * @copyright	Copyright 2011, Rui Posse (http://ruiposse.com)
 * @license		
 * @filename	admin.js
 * @since		SSBE(tm) v 0.2
 * @date		Wed Jun 1 22:28 2011
 */


/* TODO
------------------------------ */
// . 


/* Main form
------------------------------ */
$("#form-main").load('engine/engine-forms.php #newPostForm');

$('#idpost').keyup(function() {
	if( $(this).val() == "" )
		$('#form-main').load('engine/engine-forms.php #newPostForm');
    else
    	$('#form-main').load('engine/engine-forms.php #editPostForm', { 'id_post': $(this).val() });
});
	
	
/* Posts Table Navigation
------------------------------ */
var offset = 0;

$('#listposts').load('engine/engine-forms.php #listposts', { offset: offset});

$('#next').click(function(){
	offset = offset + 20;
    $('#listposts').load('engine/engine-forms.php #listposts', { offset: offset});
});
    
$('#back').click(function(){
	if(offset != "0")
		offset = offset - 20;
		
    $('#listposts').load('engine/engine-forms.php #listposts', { offset: offset});
});
    