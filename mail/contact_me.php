<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'Stekos2014@yandex.ru'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
<<<<<<< HEAD
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nИмя: $name\n\nEmail: $email_address\n\nТелефон: $phone\n\nСообщение:\n$message";
=======
$email_body = "Письмо с сайта Stekos.ru \n\n".":\n\nИмя: $name\n\nEmail: $email_address\n\nТелефон: $phone\n\nСообщение:\n$message";
>>>>>>> e10f381e0df3ab35c198fbdf13365bef054daa84
$headers = "From: Stekos@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>

