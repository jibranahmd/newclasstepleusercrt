<?php
include 'include/connection2.php';


$email = $_POST["email"];
$pswd = $_POST["password"];

$q = "INSERT into `users` value (null,'$email','$pswd','user')";
$result = mysqli_query($conn,$q);
if($result){
    header("location: auth-login.php");
    die;
}
else{
    echo "error";
}

?>