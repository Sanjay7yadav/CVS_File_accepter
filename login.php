<?php
include "connection.php";

$email=$_POST["Email"];
$pass=$_POST["Password"];

$sql = "SELECT * FROM main WHERE Email='$email' and Password = '$pass'";
$result = mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result);
if ($count==1) {
        header('Location:index.html');
}
else{
    echo "<script type='text/javascript'>alert('username or password is wrong ');</script>";
    header('refresh:0.1; url =index.html'); 
}
$conn->close();

?>