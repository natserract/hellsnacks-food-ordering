<?php
include '../config/config.php';
$id_user = $_GET['id_user'];
$sql = mysqli_query($koneksi, "DELETE FROM users WHERE id_user='$id_user'");
if(sql){
	header("location:../?page=user");
}else return false;

?>