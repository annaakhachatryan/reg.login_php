<?php
$con = new mysqli('localhost', 'root', '', 'learnalone_registration');

if(!$con){
    die(mysqli_error($con));
}
?>