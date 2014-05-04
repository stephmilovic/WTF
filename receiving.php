<?php
if(isset($_POST['submit'])) {
$to = "milovics1@gmail.com";
$subject = "New Website Lead";
 
// data the visitor provided
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
 
//constructing the message
$body = " From: $name_field\n\n E-Mail: $email_field\n\n Message:\n\n $message";
 
// ...and away we go!
mail($to, $subject, $body);
 
// redirect to confirmation
header('Location: http://www.histeph.com/success');
} else {
  echo "Error! Please try again.";
}
?>