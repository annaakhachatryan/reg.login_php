<?php

$login = 0;
$invalid = 0; 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "Select * from `reginter` where username='$username' and password='$password'";
    $result = mysqli_query($con, $sql);

    $result = mysqli_query($con, $sql);
    if($result){
        $num = mysqli_num_rows($result);
        if($num > 0){
            $login = 1;
            session_start();
            $_SESSION['username'] = $username;
            header('location:homepage.php');
        }else{
            $invalid = 1;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
        if ($invalid) {
            echo '<div class="error-message">
                    Error. Invalid credentials.
                    <p class="close">X</p>
                </div>';
        }
    ?>
    <?php
        if($login){
            echo '<div class="success-message"">
                You are successfully logged in!
                <p class="close">X</p>
            </div>';
        }
    ?>
    <form class="register my-3" action='loginpage.php' method='POST'>
        <h1>Login page</h1>
        <input type="text" name="username" id="" placeholder='Username' />
        <input type="text" name="password" id="" placeholder='Password' />
        <button>Login</button>
        <a class="btn btn-dark my-2" href="register.php">If you don't have page then register!</a>
    </form>

    <!-- bootstrap link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="register.js"></script>
</body>
</html>