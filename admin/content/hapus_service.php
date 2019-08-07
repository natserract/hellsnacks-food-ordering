<?php
include '../config/config.php';
$id_kontak = $_GET['id_kontak'];
$sql = mysqli_query($koneksi, "DELETE FROM kontak WHERE id_kontak='$id_kontak'");
if(sql){
	header("location:../?page=service");
}else return false;

?>