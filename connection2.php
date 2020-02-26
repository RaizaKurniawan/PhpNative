<?php
    $username = 'frexor';
    $password = 'frexor2018';
    $host = 'localhost:8155';
    $db = 'php_native';

    $conn = mysqli_connect($host,$username,$password,$db);

    if ($conn == true) {
        echo "Connected";
    } else {
        echo "Error".mysqli_error($conn);
    }

?>