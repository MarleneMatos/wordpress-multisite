<?php

$to =  "info@webtechfocus.com, aa9jdamata@gmail.com , aa9jdamata@​yahoo.com";
$subject = "wtf | theme | email | contact form";


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: " . $email . "\r\n";

// More headers
//$headers .= 'From: <webmaster@example.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

$message = "<strong>Email = </strong>" . $email . "<br>";
$message .= "<strong>Name = </strong>" . $name . "<br>";
$message .= "<strong>Message = </strong>" . $email_message . "<br>";
mail($to, $subject, $message, $headers);



/*
$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to, $subject, $message, $headers);
*/
