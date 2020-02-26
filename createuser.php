<?php 
    include "viewuserdata.php";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data for User</title>
</head>
<body>
    <table>   
        <tr>
            <td>User ID</td>
            <td><input type = "text" placeholder = "User ID"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type = "password" name = "password"></td>
        </tr>
        <tr>
            <td>Action</td>
            <td><input type = "submit" name = "simpan" value = "Save"></td>
        </tr>
    </table>
</body>
</html>