<?php
include "./configs/config.php";

//Insert to Pengiriman
if(isset($_POST['checkout_place_order'])){
    // error_reporting(0);
    $random=rand(000000,999999);


    $nama = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $telepon = strip_tags($_POST['telepon']);
    $alamat = strip_tags($_POST['alamat']);
    $provinsi = strip_tags($_POST['provinsi']);
    $kota = strip_tags($_POST['kota']);
    $ket = strip_tags($_POST['ket']);

    $nama = $koneksi->real_escape_string($nama);
    $email = $koneksi->real_escape_string($email);
    $telepon = $koneksi->real_escape_string($telepon);
    $alamat = $koneksi->real_escape_string($alamat);
    $provinsi = $koneksi->real_escape_string($provinsi);
    $kota = $koneksi->real_escape_string($kota);
    $ket = $koneksi->real_escape_string($ket);

    $user_username = $_SESSION['user_username'];
    $id_order_h = $random;
    
    $tgl_order = date("Y-m-d H:i:s");
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $ket = $_POST['ket'];
    $status = "Pending";

    $queryProduk = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$key'");
    $data = mysqli_fetch_array($queryProduk);
    $jumlah_harga = $data['produk_harga'] * $val;
    $subtotal_harga += $jumlah_harga;
    
    $query = "INSERT INTO pengiriman(id_order, nama_lengkap, email, tlp, alamat, provinsi, kota, c_pesanan) VALUES('$random','$nama', '$email', '$telepon', '$alamat', '$provinsi', '$kota', '$ket')";
    
    $query2 = mysqli_query($koneksi, "INSERT INTO order_header VALUES('$id_order_h', '$user_username', ' $tgl_order', '$status', '$numItems', '$total')");

    foreach ($_SESSION['items'] as $key => $val) {
        $randomId=rand(0000,9999);
        $queryOrderD = $koneksi->query("INSERT INTO order_detail VALUES('$randomId', '$id_order_h', '$key','$val', '$subtotal_harga')");
        $result = mysqli_query($koneksi, $queryOrderD);
    } 
     header("Location: index.php?page=success");
  

    if($koneksi->query($query)){
        $msg = "<div class='alert alert-success success-alert'>
                    <button type='button' class='close' data-dismiss='alert'>x</button>
                    <strong>Terima Kasih! </strong> Pesan Anda telah diterima, kami akan segera merespon Anda.
                </div>";
    } else {
        $msg =  "
        <div class='alert alert-danger danger-alert'>
        <button type='button' class='close' data-dismiss='alert'>x</button>
            <strong>Mohon Maaf! </strong> Pesan Anda belum bisa diterima, terjadi kesalahan.
        </div>";
    }
}
unset($_SESSION['items']);    

?> 