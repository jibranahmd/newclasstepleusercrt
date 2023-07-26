<?php
include 'include/connection.php';

?>


<?php
$id = $_GET["id"];
echo $q = "DELETE from `users` where `user_id` = $id";
$result = mysqli_query($conn,$q);

if($result){
    header("location: user.php");
    die;
}
else{
    echo "<br>";
}


?>