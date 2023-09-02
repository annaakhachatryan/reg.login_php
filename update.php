<?php

include 'connect.php';

$id = $_GET['updateid'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `adduser` SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location: display.php');
        exit();
    } else {
        echo mysqli_error($con);
    }
}

$sql = "SELECT * FROM `adduser` WHERE id='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

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
        <form action="update.php?updateid=<?php echo $id; ?>" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" autocomplete="off" required>
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>" autocomplete="off" required>
            
            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" value="<?php echo $mobile; ?>" autocomplete="off" required>
            
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" value="<?php echo $password; ?>" autocomplete="off" required>
            
            <button type="submit" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
