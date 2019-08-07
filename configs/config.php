<?php
    ob_start();
    
    $db_host = "localhost";
    $db_user = "k8242757_admin";
    $db_pass = "Alfin9090";
    $db_name = "k8242757_hellsnacksDb";
    $title = " &#8211; HellSnacks | Jual Cemilan Pedas";

    $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(mysqli_connect_error()){
        echo "Gagal melakukan koneksi ke database" .mysqli_connect_error();
    }

?>
