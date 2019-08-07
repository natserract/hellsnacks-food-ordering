<?php
include '../config/config.php';
$id_produk = $_GET['id_produk'];
$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id_produk'");
$result = mysqli_fetch_array($query);


$sql = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$id_produk'");
if($sql){
	header("location:../index.php?page=product");
	unlink("../../assets/img/product/".$result['produk_image']);
}else return false;

?>