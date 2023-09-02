<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:loginpage.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <div class="welcome">
        <div style="display: flex; align-items: center;">
            <p>Welcome ! </p>
            <p><?php echo $_SESSION['username']; ?></p>
        </div>
        <div>
            <p class="closeWelcome">X</p>
        </div>
    </div>

    <header>
        <div class="headerDiv">
            <a href="homepage.php">Home</a>
            <a href="adduser.php">Add user</a>
            <a href="http://">About</a>
            <a href="http://">Deliver</a>
            <a href="logout.php">Log out</a>
        </div>
    </header>

    <script src="homepage.js"></script>
</body>
</html>