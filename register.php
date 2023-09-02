<?php
$user = 0;
$success = 0;
$invalid = 0;
$invalidinput = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $age = $_POST['age'];

    if (empty($name) || empty($surname) || empty($username) || empty($password) || empty($confirmpassword) || empty($age)) {
        $invalidinput = 1;
    } else {
        $sql = "SELECT * FROM `reginter` WHERE username = '$username'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                $user = 1;
            } else {
                if ($password === $confirmpassword) {
                    $sql = "INSERT INTO `reginter` (name, surname, username, password, age) VALUES ('$name', '$surname', '$username', '$password', '$age')";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        $success = 1;
                        header('location: loginpage.php?success=1');
                        exit();
                    } else {
                        die(mysqli_error($con));
                        $invalid = 1;
                    }
                } else {
                    $invalid = 1;
                }
            }
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
    <title>Registration</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .empty-field {
            border-color: red;
        }
    </style>
</head>
<body>
    <?php
    if ($user) {
        echo '<div class="error-message">
                Username already exists. Please choose a different username.
                <p class="close">X</p>
            </div>';
    }
    ?>
    <?php
    if ($invalid) {
        echo '<div class="errorpas-message">
                Please check your password. Something is wrong.
                <p class="close">X</p>
            </div>';
    }
    ?>
    <?php
    if ($invalidinput) {
        echo '<div class="errorinp-message">
                Something is wrong. Maybe you missed out anything!
                <p class="close">X</p>
            </div>';
    }
    ?>
    <?php
    if ($success) {
        echo '<div class="success-message">
                You have registered successfully!
                <p class="close">X</p>
            </div>';
    }
    ?>
    <form class="register my-3" action='register.php' method='POST' onsubmit="return validateForm()">
    <h1>Registration</h1>
        <input type="text" name="name" placeholder='Name' />
        <input type="text" name="surname" placeholder='Surname' />
        <input type="text" name="username" placeholder='Username' />
        <input type="text" name="password" placeholder='Password' />
        <input type="text" name="confirmpassword" placeholder='Confirm Password' />
        <input type="text" name="age" placeholder='Age' />
        <button>Register</button>
        <a class="btn btn-dark my-2" href="loginpage.php">Do you have page ?</a>
    </form>


    <!-- bootstrap link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="register.js"></script>
</body>
</html>
