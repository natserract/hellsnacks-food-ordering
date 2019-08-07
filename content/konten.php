
<!-- Pengaturan Halaman -->

<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        }else $page = 'beranda';

    if($page == "beranda") include ("beranda.php");
    else if($page == "masuk") include ("login.php");
    else if($page == "daftar") include ("daftar.php");
    else if($page == "tentang") include ("tentang.php");
    else if($page == "keranjang") include ("keranjang.php");
    else if($page == "carabelanja") include ("carabelanja.php");
    else if($page == "kontak") include ("kontak.php");
    else if($page == "action") include ("keranjang-proses.php");
    else if($page == "checkout") include ("checkout.php");
    else if($page == "detail") include ("detailproduk.php");
    else if($page == "produk") include ("produk.php");
    else if($page == "logout") include ("logout.php");
    else if($page == "pesanan") include ("pesanan.php");
    else if($page == "checkout-proses") include ("checkout-proses.php");
    else if($page == "success") include ("checkout-last.php");
    else if($page == "pengaturan-akun") include ("akun.php");
    else if($page == "update-akun") include ("update-akun.php");
    else if($page == "hapus_pesanan") include ("hapus_pesanan.php");
    else if($page == "404") include ("404.php");

    else {
        header("Location: index.php?page=404");
    }
   
    
?>