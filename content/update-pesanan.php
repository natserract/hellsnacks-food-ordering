<?php
include "../configs/config.php";
session_start();
//Insert to Pengiriman
if(isset($_POST['checkout_place_order'])){
    // error_reporting(0);

    $nama = strip_tags($koneksi->real_escape_string($_POST['nama']));
    $email = strip_tags($koneksi->real_escape_string($_POST['email']));
    $telepon = strip_tags($koneksi->real_escape_string($_POST['telepon']));
    $alamat = strip_tags($koneksi->real_escape_string($_POST['alamat']));
    $provinsi = strip_tags($koneksi->real_escape_string($_POST['provinsi']));
    $kota = strip_tags($koneksi->real_escape_string($_POST['kota']));
    $ket = strip_tags($koneksi->real_escape_string($_POST['ket']));
    $tgl_order = date("Y-m-d H:i:s");
    $user_username = $_SESSION['user_username'];
    $id_order_h = rand(000000,999999);
    $id_order_d = rand(000000,999999);

    foreach ($_SESSION['items'] as $key => $val) { 
    $produk_id = $key;
    $sql = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$key'");
    $result = mysqli_fetch_array($sql);
    $sub = $result['produk_harga'] * $val;
    
    $query1 = mysqli_query($koneksi, "INSERT INTO order_detail VALUES( '$id_order_d', '$id_order_h', '$produk_id', '$val', '$sub')");
    $query3 = mysqli_query($koneksi, "INSERT INTO pengiriman(id_order, nama_lengkap, email, tlp, alamat, provinsi, kota, c_pesanan) VALUES('$id_order_h','$nama', '$email', '$telepon', '$alamat', '$provinsi', '$kota', '$ket')");
    
    $query2 = mysqli_query($koneksi, "INSERT INTO order_header VALUES('$id_order_h', '$user_username', ' $tgl_order','$key', '$val', '$sub')");
    if($query1 && $query2 && $query3){
        $msg = "<div class='alert alert-success success-alert'>
                    <button type='button' class='close' data-dismiss='alert'>x</button>
                    <strong>Terima Kasih! </strong> Pesan Anda telah diterima, kami akan segera merespon Anda.
                </div>";
    } else {
        $msg =  "<div class='alert alert-danger danger-alert'>
        <button type='button' class='close' data-dismiss='alert'>x</button>
            <strong>Mohon Maaf! </strong> Pesan Anda belum bisa diterima, terjadi kesalahan.
        </div>";
}
    }
}
?> 