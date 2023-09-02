<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `adduser`  (name, email, mobile, password)  VALUES ('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);

    if($result){
        echo 'Success';
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
    <title>Display</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>
    <button>
        <a href="adduser.php">Add user</a>
    </button>
    <table>
        <tbody>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>MOBILE</th>
                <th>PASSWORD</th> 
                <th>DELETE</th> 
                <th>UPDATE</th> 
            </tr>
        </tbody>
        <tbody>
            <?php
                $sql = 'select * from `adduser`';
                $result = mysqli_query($con, $sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo '<tr>
                            <th>'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$password.'</td>
                            <td>
                                <button>
                                    <a href="delete.php?deleted='.$id.'">Delete</a>
                                </button>
                            </td>
                            <td>
                                <button>
                                    <a href="update.php?updateid='.$id.'">Update</a>
                                </button>
                            </td>  
                        </tr>';
                    }
                }
            ?>      
            </tbody>
    </table>
</body>
</html>
