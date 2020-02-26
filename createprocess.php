<?php 
    include "connection2.php";

    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $isActive = 0;
    $isDelete = 0;
    $userCreate = "SYSTEM";
    $userUpdate = "SYSTEM";
    $dateCreate = date ('Y-m-d');
    $dateUpdate = date ('Y-m-d');

    $query = "INSERT INTO t_user(f_user_ID, f_password, f_isActive, 
    f_isDelete, f_user_create, f_date_create,
     f_user_update, f_date_update) VALUES (
        '".$userid."','".$password."','".$isActive."','".$isDelete."',
        '".$userCreate."','".$dateCreate."','".$userUpdate."','".$dateUpdate."')";

        $execute = mysqli_query($conn, $query);
        if ($execute == true) {
            echo "Input New data is Successful <a href = 'index.php'>Go to Home </a>";
        } else {
            echo "Failed <a href = 'createuser.php'>Add User </a>";
        }



?>