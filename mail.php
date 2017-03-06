<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];



$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n  Type: $type \n Message: $message";
$recipient = "contact_form@orlaithshore.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='http://www.orlaithshore.com' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
