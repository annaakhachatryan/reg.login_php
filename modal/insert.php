<?php

include 'connect.php';
extract($_POST);

if(isset($_POST['name']) && isset($_POST['email']) &&isset($_POST['mobile']) && isset($_POST['password'])){
    $sql = "INSERT INTO `adduser` (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);
}

?>