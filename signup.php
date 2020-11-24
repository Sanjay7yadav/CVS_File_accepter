<?php
$email=$_POST['email'];
$pass=$_POST['password'];

include "connection.php";

$sql="INSERT INTO File(Email,Password) VALUES ('$email','$pass')";
if(!mysqli_query($conn,$sql)) {
echo 'not inserted';
}
else {
echo 'inserted';
}
?>