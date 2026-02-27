<?php

//$to =  "info@webtechfocus.com, aa9jdamata@gmail.com , aa9jdamata@​yahoo.com";
//$subject = "wtf | theme | email | contact form";


// EDIT THE 2 LINES BELOW AS REQUIRED

$to = "aa9jdamata@gmail.com";
$subject = "wtf | theme | email | contact form";

function send_email($name,$email,$email_message)
{
  global $to;
  global $subject;

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: ".$email. "\r\n";

  $message = "<strong>Email = </strong>".$email."<br>";
  $message .= "<strong>Name = </strong>".$name."<br>";
  $message .= "<strong>Message = </strong>".$email_message."<br>";
  mail($to, $subject, $message,$headers);
  return true;
}

function validate($name,$email,$message)
{
  $return_array = array();
  $return_array['success'] = '1';
  $return_array['name_feedback'] = '';
  $return_array['email_feedback'] = '';
  $return_array['message_feedback'] = '';

 if($email == '')
  {
    $return_array['success'] = '0';
    $return_array['email_feedback'] = 'email is required';
  }
  else
  {
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp,$email)) {
      $return_array['success'] = '0';
      $return_array['email_feedback'] = 'enter valid email.';  
    }
  }

  if($name == '')
  {
    $return_array['success'] = '0';
    $return_array['name_feedback'] = 'name is required';
  }
  else
  {
     $string_exp = "/^[A-Za-z .'-]+$/";
    if (!preg_match($string_exp, $name)) {
      $return_array['success'] = '0';
     $return_array['name_feedback'] = 'enter valid name.';
    }
  }


  if($message == '')
  {
    $return_array['success'] = '0';
    $return_array['message_feedback'] = 'message is required';
  }
  else
  {
    if (strlen($message) < 2) {
      $return_array['success'] = '0';
      $return_array['message_feedback'] = 'enter valid message.';
    }
  }
  return $return_array;
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$return_array = validate($name,$email,$message);
if($return_array['success'] == '1')
{
  send_email($name,$email,$message);
}

//header('Content-type: text/json');
//echo json_encode($return_array);
//die();

?>
