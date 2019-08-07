<?php
	include '../config/config.php';
	if(isset($_POST['upload-kategori'])){
     	$nama_kategori = strip_tags($_POST['nama_kategori']);
     	$gambar_kategori = $_FILES['gambar_kategori']['name'];
    	$loc=$_FILES['gambar_kategori']['tmp_name'];
     	$type=$_FILES['gambar_kategori']['type'];

		if ($loc=="") {
		$query=mysqli_query($koneksi, "INSERT INTO kategori(nama_kategori) VALUES('$nama_kategori')");
	}else {
		$query=mysqli_query($koneksi, "INSERT INTO kategori(nama_kategori,image) VALUES('$nama_kategori', '$gambar_kategori')");
		move_uploaded_file($loc,"../../assets/img/$gambar_kategori");
	}
	if(!$query){
		die('Gagal : '.mysqli_errno($koneksi).' - '.mysqli_error($koneksi));
 	}else{
 		header("location:../?page=category");
 	}

} 

?>
