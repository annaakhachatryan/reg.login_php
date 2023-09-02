<?php

include 'connect.php';
if(isset($_GET['deleted'])){
    $id = $_GET['deleted'];

    $sql = "delete from `adduser` where id=$id";
    $result = mysqli_query($con, $sql);

    if($result){
        header('location: display.php');
    }else{
        die(mysqli_error($con));
    }

}

?>