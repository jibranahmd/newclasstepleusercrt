<?php
include 'include/connection2.php';

$email = $_POST["email"];
$pswd = $_POST["password"];

$q = "SELECT * from `users` where `email` = '$email' and `password` = '$pswd'";

$result = mysqli_query($conn,$q);
if(mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_assoc($result);
    if($user["role"] == "admin"){
        header("location: index.php");
        die;
    }
    else if($user["role"] == "user"){
        header("location: user-home.php");
    }
}
else{
    echo "invalid password";
}




?>