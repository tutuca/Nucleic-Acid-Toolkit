<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['message']))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	
// Create the email and send the message
$to = 'yourname@yourdomain.com';
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new bug report.\n\n"."Here are the details:\n\nTool: $name\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n";
mail($to,$email_subject,$email_body,$headers);
return true;			
?>