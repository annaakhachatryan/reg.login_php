<?php
include 'connect.php';

if(isset($_POST['displayDataTable'])){
    $table = '<table class="table table-striped my-5">
        <tbody>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">MOBILE</th>
                <th scope="col">PASSWORD</th> 
                <th scope="col">DELETE</th> 
                <th scope="col">UPDATE</th> 
            </tr>';

    $sql = "SELECT * FROM `adduser`";
    $result = mysqli_query($con, $sql);
    $number = 1;
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
        
        $table .= '<tr>
                <td>'.$number.'</td>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$password.'</td>
                <td>
                    <button class="btn btn-danger" onclick="deleteUser('.$id.')">Delete</button>
                </td>
                <td>
                    <button class="btn btn-dark" onclick="updateUser('.$id.')">Update</button>
                </td>  
            </tr>';
            $number++;
    }

    $table .= '</tbody></table>';
    echo $table;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<script src="index.js"></script>
</body>
</html>