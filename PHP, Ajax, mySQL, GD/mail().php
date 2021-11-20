<?php

$to= 'devidd05@gmail.com';
$subject= 'This is the subject';
$body= "Hello Biatchez!\nI will fuck you biatchez!";
$headers= 'From: Devid <devidd55@gmail.com>';

if( mail($to, $subject, $body, $headers) ) echo 'Email successfully sent!';
else echo 'Error sending email.';

?>