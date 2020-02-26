<?php

    $koneksi = mysqli_connect('localhost:8155','frexor','frexor2018','php_native');

    if($koneksi == true){
        echo "Berhasil";
    } else {
        echo "Error".mysqli_connect($koneksi);
    }
?>