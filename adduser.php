<?php
include 'connect.php';
include 'homepage.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `adduser`  (name, email, mobile, password)  VALUES ('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);

    if($result){
        header('loctaion: display.php');
    } else {
        echo mysqli_error($con);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="stylesheet" href="addusers.css">
</head>
<body>
    <div class="addUser">
        <button class="userTable">
            <a href="display.php">Users table</a>
        </button>
        <form action="adduser.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" autocomplete="off" required>
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" autocomplete="off" required>
            
            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" autocomplete="off" required>
            
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" autocomplete="off" required>
            
            <button type="submit" name="submit">Add user</button>
        </form>
    </div>
</body>
</html>
