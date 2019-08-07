<?php
include '../config/config.php';
$id_order = $_GET['id_order'];
$sql = mysqli_query($koneksi, "DELETE FROM order_header WHERE id_order='$id_order'");
$sql2 = mysqli_query($koneksi, "DELETE FROM order_detail WHERE id_order = '$id_order'");

	header("location:index.php?page=pesanan");


?>