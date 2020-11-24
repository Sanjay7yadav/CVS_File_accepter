<?php
ob_start();
include "connection.php";

$user=$_POST["userid"];
setcookie("currentUserId", $user);
$passw=$_POST["password"];

$sql = "SELECT * FROM main WHERE UserId='$user' and Passw = '$passw'";
$result = mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result);
//echo $count;
if ($count==1) {
    $role=$row['Account'];
    if($role=='contractor'){
        header('Location:/contractor/dashboard.php');
        //
    }
    else if($role=='employee'){
        header('Location:/employee/dashboard.php');
    }
    else {
        header('Location:index.php');
    }
}
else{
    echo "<script type='text/javascript'>alert('username or password is wrong ');</script>";
    header('refresh:0.1; url =index.php'); 
}
$conn->close();
ob_end_flush();
?>