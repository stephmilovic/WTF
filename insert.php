<?php

// Get values from form
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to = "milovics1@gmail.com";
$subject = "New Website Lead";
$message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Message: " . $message;


$from = "HiSteph.com";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://www.stephmilovic.com/WTF/success';</script>";
  // Created by Future Tutorials
}else{
  echo "Error! Please try again.";
}



?>
