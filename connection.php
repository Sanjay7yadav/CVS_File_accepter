<?php


$servername = "localhost";
$username = "id15489822_file";
$password = "Sanjay-Yadav1048";
$dbname = "id15489822_fileaccept";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($conn);

?>