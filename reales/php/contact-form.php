<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'jagathswapnarealtors12@gmail.com';  

	// prepare message 
	$body = "You have got a new message from the contact form on your website - Jagathswapna :
	
	Name:  $_POST[name]
	Phone: $_POST[number]
	Email:  $_POST[email]
	Subject:  $_POST[subject]
	Message:  $_POST[message]";

	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Message from Jagathswapna', $body, $headers );

} ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Thanks!</title>
</head>
<body>
<p> Thank you! We will get back to you soon.</p>
</body>
</html>