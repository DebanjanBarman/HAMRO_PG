<?php
$db = mysqli_connect('127.0.0.1', 'root', '');

if (!$db) {
    echo "Not connected";
}
if (!mysqli_select_db($db, 'tutorial')) {
    echo "Database no selected";
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pgName = $_POST['pg-name'];

$to = $email;
$subject = "Owners Contact Number";

if ($pgName == "ANITA PG")
    $message = "Dear " . $name . ",<br>The contact number of " . $pgName . " is 9064483959/ 6295341003";
elseif ($pgName == "CAREWELL PG")
    $message = "Dear " . $name . ",<br>The contact number of " . $pgName . " is 9609969116";
elseif ($pgName == "DOMA PG")
    $message = "Dear " . $name . ",<br>The contact number of " . $pgName . " is 8001758816";

elseif ($pgName == "GAZEBO PG")
    $message = "Dear " . $name . ",<br>The contact number of " . $pgName . " is 9609969116";

elseif ($pgName == "IMAGE PG")
    $message = "Dear " . $name . ",<br>The contact number of " . $pgName . " is 7076732861/ 7479158630";

elseif ($pgName == "MAYA PG")
    $message = "Dear " . $name . ",<br>The contact number of " . $pgName . " is  8348752094";

elseif ($pgName == "ROYAL PG")
    $message = "Dear " . $name . ",<br>The contact number of " . $pgName . " is 8327044876/ 8016215664";

elseif ($pgName == "PALMU PG")
    $message = "Dear " . $name . ",<br>The contact number of " . $pgName . " is 7430908112";

elseif ($pgName == "SAGAR PG")
    $message = "Dear " . $name . ",<br>The contact number of " . $pgName . " is 7076681648/ 8637088602";

$headers = "From: harmropg@gmail.com";


if (mail($to, $subject, $message, $headers)) {

    echo "Kindly check your mail for contact number..";
} else {
    echo "Something went wrong!";
}

$sql = "INSERT INTO response (name,email, phone,pgName) VALUES('$name', '$email', '$phone', '$pgName')";

if (!mysqli_query($db, $sql)) {
    //echo 'Not inserted';
} else {
    //   echo ' <center style="background-color:red;"><h2>DATA SENDED SUCCESSFULLY <br>
    // We will Contact You Soon ! 
    // </h2></center>';
}
