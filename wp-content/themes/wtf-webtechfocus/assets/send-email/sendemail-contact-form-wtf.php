<?php

// EDIT THE 2 LINES BELOW AS REQUIRED
// 1 recipient
//$to = "aa9jdamata@gmail.com";

// multiple recipients
$to  = 'info@webtechfocus.com' . ', '; // note the comma
$to  = 'aa9jdamata@gmail.com' . ', '; // note the comma
$to .= 'aa9jdamata@​yahoo.com';

// subject
$subject = "wtf | theme | email | contact form";

$message = 'hello';
$headers = 'From: webmaster@example.com'       . "\r\n" .
             'Reply-To: webmaster@example.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>