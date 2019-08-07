<?php
	include '../config/config.php';
	if(isset($_POST['upload'])){
     	$nama_produk = strip_tags($_POST['nama_produk']);
     	$kategori = strip_tags($_POST['kategori']);
     	$harga_produk = strip_tags($_POST['harga_produk']);
     	$ket_produk = strip_tags($_POST['ket_produk']);
     	$desc_produk = strip_tags($_POST['desc_produk']);
     	$produk_img = $_FILES['produk_img']['name'];
    	$loc=$_FILES['produk_img']['tmp_name'];
     	$type=$_FILES['produk_img']['type'];

		if ($loc=="") {
		$query=mysqli_query($koneksi, "INSERT INTO produk(produk_nama, nama_kategori, short_desc, long_desc, produk_harga) VALUES('$nama_produk', '$kategori', '$ket_produk', '$desc_produk', '$harga_produk')");
	}else {
		$query=mysqli_query($koneksi, "INSERT INTO produk(produk_nama,produk_image, nama_kategori, short_desc,long_desc,produk_harga) VALUES('$nama_produk', '$produk_img', '$kategori', '$ket_produk', '$desc_produk', '$harga_produk')");
		move_uploaded_file($loc,"../../assets/img/product/$produk_img");
	}
	if(!$query){
		die('Gagal : '.mysqli_errno($koneksi).' - '.mysqli_error($koneksi));
 	}else{
 		header("location:../?page=product");
 	}

} 

?>
