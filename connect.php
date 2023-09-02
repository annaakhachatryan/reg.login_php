<?php
///////////// registreation conn
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'learnalone_registration';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if(!$con){
    die(mysqli_error($con));
}

?>