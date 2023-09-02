<?php

include 'connect.php';

if(isset($_POST['deleteId'])){
    $unique = $_POST['deleteId'];

    $sql = "DELETE FROM `adduser` WHERE id=$unique";
    $result = mysqli_query($con, $sql);
}


?>