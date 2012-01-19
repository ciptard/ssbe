/**
 *
 * JQuery auxiliar file for install.php.
 *
 * SSBE : Super Simple Blog Engine (http://ruiposse.com/ssbe)
 *
 * @author		Rui Posse (http://ruiposse.com)
 * @email		ruiposse@gmail.com
 * @copyright	Copyright 2011, Rui Posse (http://ruiposse.com)
 * @license		
 * @filename	install.js
 * @since		
 * @date		
 */

/**
 ** NOT IN USE 					NOT IN USE 					NOT IN USE 					NOT IN USE 
 **/



/* Form Install
------------------------------ */
		
$(document).ready(function(){
	
	$("#form-install").submit(function(event) {
		event.preventDefault(); // stop form from submitting normally
		$.post("install-aux.php", $("#form-install").serialize(), 
			function(data){
				//$('#result').html(data);
			}
		).success(function() { 
				$("#result").html("<div style='background-color:#ffa; width: 30%; padding:20px; margin-top: 10px; margin: 0 auto;'>SUCCESS! Head to <a href='admin.php'>SSBE Administration</a>.</div>");
		 	})
    	 .error(function() { 
    	 		$("#result").html("<div style='background-color:#aff; width: 30%; padding:20px; margin-top: 10px; margin: 0 auto;'>ERROR!</div>");
    	 	})
	});
});


/*
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/additional-methods.js"></script>
	
	<script>
		$(document).ready(function() {
			
			var validated = $("#form-login").validate({
				rules: {
					blog_username: "required",
					blog_password: "required",
					blog_password2: {
						equalTo: "#password"
					}
				},
				messages: {
					blog_username: "Username is required",
					blog_password: "You need to enter a password",
					blog_password2: {
						required: "Repeat your password",
						equalTo: "Passwords don't match"
					}
				}
			});
						
		});
	</script>
*/