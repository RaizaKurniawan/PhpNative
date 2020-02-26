<?
    include "connection2.php";

    $query = "SELECT * FROM t_user where f_isDelete = 0";
    $execute = mysqli_query($conn, $query);
    $hasil = mysqli_fecth_array($execute);

    var_dump($hasil);
?>