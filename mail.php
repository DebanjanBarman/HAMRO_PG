<?php

$name=$_POST['name'];
$email=$_POST['email'];
$user_message =$_POST['message'];

$to = "hamropg@gmail.com";
$subject = "Response from website";

$message="Name: ".$name."<br>Message: ".$user_message;

$headers = "From: ".$email;


if(mail($to,$subject,$message,$headers)){

    echo "Response sent successfully.";
}
else{
    echo "Something went wrong!";
}

?>