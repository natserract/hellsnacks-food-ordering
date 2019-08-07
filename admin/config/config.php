<?php
    ob_start();
    $host='localhost';
    $user='root';
    $password='';
    $dbname='hellsnacks_db';

    $koneksi=mysqli_connect($host, $user, $password, $dbname) or die ('koneksi gagal');
?>