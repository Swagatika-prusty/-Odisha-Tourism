<?php
$name = $_POST['name'];
$visiter_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'amitapritam332@gmail.com';

$email_subject = 'Contact@OT';

$email_body = "User Name: $name.\n". 
              "User Email: $visiter_email.\n".
              "User Message: $message.\n";

$to = 'rituparna282parija@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visiter_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: cont.html");

?>
    