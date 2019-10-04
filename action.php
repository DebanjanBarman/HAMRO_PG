<?php

$db = mysqli_connect('127.0.0.1', 'root', '');

if(!$db){
    echo "Not connected";
}
if(!mysqli_select_db($db, 'tutorial')){
    echo "Database no selected";

}

$Pgname = $_POST['pgname'];
$Owname = $_POST['owname'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$Yoe = $_POST['yoe'];
$Address = $_POST['address'];
$Type = $_POST['type'];
$Room = $_POST['room'];
$Charge = $_POST['charge'];
$Adcharge = $_POST['adcharge'];

$sql = "INSERT INTO person (Pgname, Owname, Phone, Email, Yoe, Address, Type, Room, Charge, Adcharge) VALUES('$Pgname', '$Owname', '$Phone', '$Email', '$Yoe', '$Address', '$Type', '$Room', '$Charge', '$Adcharge')";

if(!mysqli_query($db,$sql)){
    echo 'Not inserted';
}

else{
    echo ' <center style="background-color:red;"><h2>DATA SENDED SUCCESSFULLY <br>
    We will Contact You Soon ! 
    </h2></center>';
}

header("refresh:1; url = index.html");
?>