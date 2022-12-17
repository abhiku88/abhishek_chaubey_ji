<?php

require 'smtp/mail.php';

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$message= $_POST['message'];

$to = "anhishekkumar18@gmail.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  phone = " . $phone . "\r\n  Address = " . $address . "\r\n Message =" . $message;
$headers = "From: noreply@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:thankyou.html");
}
    
    


?>
