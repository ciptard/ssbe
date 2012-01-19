<?php
  $to = "ruiposse@gmail.com";
  $subject = "SSBE Contact";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $message = $_REQUEST['message'];
  $headers = "From: $email";

  $msg = $name . "\n" . $email . "\n\n" . $message;

  if($email != ""){

    $sent = mail($to, $subject, $msg, $headers) ;
  
    if($sent){
	  echo "<script type='text/javascript'>location.href='/ssbe/contact.html'</script>";
	}
    else
	  echo "<script type='text/javascript'>location.href='/ssbe/contact.html'</script>";
  }
  else
	  echo "<script type='text/javascript'>location.href='/ssbe/contact.html'</script>";
?>