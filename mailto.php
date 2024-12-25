<?php
if(isset($_POST['submit'])){
    $to = "giremonika24@gmail.com";
    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $phone= $_POST['courses'];
    $subject="Inquiry From ";
    $message= $_POST['message'];
    $headers = 'From: '.$email . "\r\n";

     $body = "Name  :   ".$name. "\r\n" .
     $body = "Email :   ".$email. "\r\n" .
     $body = "Phone :   ".$phone. "\r\n" .
     $body = "Courses :  ".$courses. "\r\n" .
     $body = "Message : ".$message;

    if(mail($to, $subject,$body,$headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?> 
