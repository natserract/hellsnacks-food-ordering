<?php 
include '../config/config.php';
if(isset($_POST['update'])){
     	$nama_produk = strip_tags($_POST['edit_nama_produk']);
     	$kategori = strip_tags($_POST['edit_kategori']);
     	$harga_produk = strip_tags($_POST['edit_harga_produk']);
     	$ket_produk = strip_tags($_POST['edit_ket_produk']);
     	$desc_produk = strip_tags($_POST['edit_desc_produk']);
     	$produk_img = $_FILES['edit_produk_img']['name'];
    	$loc=$_FILES['edit_produk_img']['tmp_name'];
     	$type=$_FILES['edit_produk_img']['type'];
     	$query = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk='$_GET[id_produk]'");
    $data = mysqli_fetch_array($query);
    if(mysqli_num_rows($query) == 0) {
        echo "Terjadi kesalahan!";
    } else {
if (empty($nama_produk)) {
	$nama_produk = $data['produk_nama'];
} else if(empty($kategori)) {
	$kategori = $data['nama_kategori'];
} else if(empty($harga_produk)) {
	$harga_produk = $data['produk_harga'];
} else if(empty($ket_produk)) {
	$ket_produk = $data['short_desc'];
} else if(empty($desc_produk)) {
	$desc_produk = $data['long_desc'];
} else if(empty($produk_img)) {
	$produk_img = $data['produk_image'];
}
		if ($loc=="") {
		$query=mysqli_query($koneksi, "UPDATE produk SET produk_nama='$nama_produk', nama_kategori='$kategori', short_desc='$ket_produk', long_desc='$desc_produk' , produk_harga='$harga_produk' WHERE id_produk='$id_produk'");
	}else {
		$query=mysqli_query($koneksi, "UPDATE produk SET produk_nama='$nama_produk', produk_image='$produk_img' ,nama_kategori='$kategori', short_desc='$ket_produk', long_desc='$desc_produk' , produk_harga='$harga_produk' WHERE id_produk='$id_produk'");
		move_uploaded_file($loc,"../../assets/img/product/$produk_img");
	}
	if(!$query){
		die('Gagal : '.mysqli_errno($koneksi).' - '.mysqli_error($koneksi));
 	}else{
 		header("location:../?page=product");
 	}

} 
}
?>