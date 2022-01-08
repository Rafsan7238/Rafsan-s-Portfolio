<?php

$myemail = "rafsan7238@gmail.com";
$name = $_POST['name'];
$email_address=$_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = $myemail;
$email_body = "You have received a new message from $name.\n".
"$message";

$headers = "From: $myemail\n";
$headers .= "Reply-To:$email_address";

mail($to,$subject,$email_body,$headers);

?>