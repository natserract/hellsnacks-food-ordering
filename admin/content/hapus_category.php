<?php
include '../config/config.php';
$id_kategori = $_GET['id_kategori'];
$sql = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id_kategori'");
if(sql){
	header("location:../?page=category");
}else return false;
?>