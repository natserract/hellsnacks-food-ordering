<?php
    require_once("configs/config.php");
    if(!isset($_SESSION)){
        session_start();
    }
    
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="vendors/lightslider/lightslider.css">
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/style.default.css" />
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="vendors/pace/pace.min.js"></script>

    </head>

    <body>
        <!--Navbar-->
        <nav class="navbar navbar-default nav-top" role="navigation">
            <div class="container">
                <div class="row">
                    <!--scroll to top-->
                    <div class="scroll-top-link">
                        <i style="cursor: pointer;" class="fa fa-angle-double-up"></i>
                    </div>

                    <!--for md & sm -->
                    <?php 
                        error_reporting(FALSE);
                        if(isset($_SESSION['user_username'])){
                    ?>
                        <!-- <a href='index.php?page=logout'><?php echo $_SESSION['userSession']; ?></a> -->
                        <a href="#" class="dropdown-toggle a-account" id="link-underline" data-toggle="dropdown">
                            <!-- <i class="fa fa-user"></i> -->
                            <i class="fa fa-user-circle-o"></i> <?php echo $_SESSION['user_username']; ?>  
                            <span class="caret"></span> 
                        </a> 
                        <ul class="dropdown-menu" id="dropdown_menu"role="menu" aria-labelledby="myaccount"> 
                            <li role="presentation"> 
                                <a role="menuitem" href="index.php?page=pengaturan-akun"><i class="fa fa-cog"></i> Pengaturan Akun</a> 
                            </li> 
                            <li role="presentation"> 
                                <a role="menuitem" href="index.php?page=logout"><i class="fa fa-sign-out"></i> Logout</a> 
                            </li>
                        </ul>
                    <?php 
                        } else {
                    ?>
                            <div class="col-sm-4 col-xs-12 bt-header hidden-xs">
                        <a href="index.php?page=masuk" id="link-color"><i class="fa fa-sign-in"></i> Masuk</a>
                        <span class="linkhead">atau</span>
                       
                        <a href="index.php?page=daftar" id="link-color"><i class="fa fa-user-plus"></i> Daftar</a>
                    </div>
                        <?php } ?>

                    <!-- for xs -->
                    <div class="col-sm-4 col-xs-12 bt-header visible-xs" align="center">
                        <a href="index.php?page=masuk" id="link-color"><i class="fa fa-sign-in"></i> Masuk</a>
                        <span class="linkhead">atau</span>
                        <a href="index.php?page=daftar" id="link-color"><i class="fa fa-user-plus"></i> Daftar</a>
                    </div>

                    <div class="header-right">
                        <div class="cart_box" id="cart">
                            <a href="?page=keranjang" class="cart_total">
                                <h3 title="Keranjang Belanja">
                                    <span class="fa fa-shopping-cart"></span>
                                    <?php
                                        $total = 0;
                                        $numItems = 0;
                                        $num = 0;
                                        if (isset($_SESSION['items'])) {
                                            foreach ($_SESSION['items'] as $key => $val) {
                                                $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$key'");
                                                $data = mysqli_fetch_array($query);
                                                $jumlah_harga = $data['produk_harga'] * $val;
                                                $total += $jumlah_harga;
                                                $numItems += $val;
                                                $num = number_format($total,2,",",".");
                                            }
                                        }
                                    ?>
                                    <?php
                                    if($total == 0){
                                        echo '
                                        <span class="total">Rp. 0.000 &#8211; (0)
                                        ';
                                    }else {
                                        echo "<span class='total'>Rp.  $num </span> &#8211; (<span class='quantity'>$numItems</span>)";
                                    }
                                    ?>
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Social Media -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="itemAlign" align="center">
                        <img src="assets/img/hellsnacks.png" class="img-responsive" style="cursor: pointer" width="400" title="HellSnacks" onclick="window.location.href='./'">
                    </div>
                    <div class="btn-vertical" align="center">
                        <li><a href="https://www.facebook.com/hellsnackstore" target="_blank" class="btn btn-default fa-icon ic_fb" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li> <a href="https://twitter.com/HellSnacks" target="_blank" class="btn btn-default fa-icon ic_twtr" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/hellsnacks/" target="_blank" class="btn btn-default fa-icon ic_ig" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank" class="btn btn-default fa-icon ic_yt" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Social Media -->

        <!-- Menu -->
        <section class="bt-header-menu">
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <div class="">
                                <div class="bt-main-menu">
                                    <div class="menu-nav" id="navbar-nav" align="center">
                                        <li><a class="link-menu active" href="./" style="background: transparent; outline: 0;">BERANDA</a></li>
                                        <li><a class="link-menu" href="index.php?page=tentang" style="background: transparent; outline: 0;">TENTANG KAMI</a></li>
                                        <li class="dropdown">
                                            <a href="javascript:;" class="hidden-xs link-menu" id="dropbtn" style="background: transparent; outline: 0;">
                                                KATEGORI
                                            </a>
                                            <a href="javascript:;" class="dropdown-toggle  visible-xs link-menu" data-toggle="dropdown" style="background: transparent; outline: 0;">
                                                KATEGORI <i class="fa fa-plus-circle pull-right"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-content" id="dropdown-mod">
                                            <?php
                                                $sql = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori ASC");
                                                while($data = mysqli_fetch_array($sql)){
                                            ?>    
                                                <a href="index.php?page=produk&kategori=<?php echo $data['nama_kategori']; ?>" class="list-group-item" style="text-transform: capitalize">Serba <?php echo $data['nama_kategori']; ?> Pedas</a>
                                            <?php 
                                            }
                                            ?>

                                            </div>
                                        </li>
                                        <li><a class="link-menu" href="index.php?page=produk" style="background: transparent; outline: 0;">SEMUA PRODUK</a></li>
                                        <li><a class="link-menu" href="index.php?page=carabelanja" style="background: transparent; outline: 0;">CARA BELANJA</a></li>
                                        <li><a class="link-menu" href="index.php?page=pesanan" style="background: transparent; outline: 0;">PESANAN</a></li>
                                        <li><a class="link-menu" href="index.php?page=kontak" style="background: transparent; outline: 0;">KONTAK</a></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu -->
        <!-- End Header-->


        <!-- Content -->
       
            <?php include 'content/konten.php'; ?>
        </div>
        <!-- End Content -->

        <!-- Footer -->
        <footer id="bt_footer">
            <div class="container">
                <div class="footer_column">
                    <div class="row">
                        <div class="column col-md-3">
                            <div class="footer-contact">
                                <h3 class="widget-title"><b>HellSnacks</b></h3>
                                <div class="footer-desc">
                                    HellSnacks adalah sebuah toko online yang menjual berbagai cemilan pedas.
                                    <div class="contact-us" style="padding-top: 10px;">
                                        <div class="work" style="padding-bottom: 8px;">
                                            Senin – Sabtu : 09.30 – 17.00
                                        </div>
                                        <div class="address">
                                            <i class="fa fa-map-marker"></i>
                                            <span>Jl. Perumnas No.10 Denpasar </span>
                                        </div>
                                        <div class="phone">
                                            <i class="fa fa-phone"></i>
                                            <span>0818-63-6161 / 022-424-6161</span>
                                        </div>
                                        <div class="email">
                                            <i class="fa fa-envelope-o"></i>
                                            <span>hellsnacks@gmail.com</span>
                                        </div>
                                    </div>

                                </div>
                            </div><br class="visible-xs" />
                        </div>
                        <div class="column col-md-3">
                            <div class="footer-contact">
                                <h3 class="widget-title"><b>Produk Top</b></h3>
                                <div class="footer-desc">
                                    <ul class="widget-top-product">
                                    <?php
                                        $sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC LIMIT 3");
                                        while($data = mysqli_fetch_array($sql)){
                                    ?>
                                        <li>
                                            <a href="?page=detail&id=<?php echo $data['id_produk']; ?> <?php echo $data['produk_nama']; ?>">
                                                <img width="83" height="103" src="assets/img/product/<?php echo $data['produk_image']; ?>" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" sizes="(max-width: 83px) 100vw, 83px"> <span class="product-title"><?php echo $data['produk_nama']; ?></span>
                                            </a>
                                            <span class="price-amount amount"><span class="price-currencySymbol">Rp. </span><?php echo number_format($data['produk_harga'],2,",","."); ?></span>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div><br class="visible-xs" />
                        </div>
                        <div class="column col-md-3">
                            <div class="footer-contact">
                                <h3 class="widget-title"><b>Kategori Produk</b></h3>
                                <div class="footer-desc">
                                    <ul class="product-categories">
                                        <?php
                                            $sql = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori ASC LIMIT 5 ");
                                            while($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <li class="cat-item" style="text-transform: capitalize;"><a href="index.php?page=produk&kategori=<?php echo $data['nama_kategori']; ?>">Serba <?php echo $data['nama_kategori']; ?> Pedas</a></li>
                                        <?php 
                                            }
                                        ?>
                                    </ul>
                                </div>
                                <!-- Script for category slider -->
                                <script>
                                    $(document).ready(function() {
                                        $("#content-slider").lightSlider({
                                            loop: true,
                                            keyPress: true
                                        });
                                    });
                                </script>
                                <!-- End Script -->
                            </div><br class="visible-xs" />
                        </div>

                        <div class="column col-md-3">
                            <div class="footer-contact">
                                <h3 class="widget-title"><b>Google Maps</b></h3>
                                <div onload="initMap()" id="map" class="gmaps" style="overflow:hidden; position: relative">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.100630923713!2d115.19029631440903!3d-8.681979993762003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwNDAnNTUuMSJTIDExNcKwMTEnMzMuMCJF!5e0!3m2!1sen!2sid!4v1501896139758"
                                        width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="column col-md-3">
                            <div class="footer-contact">
                                <h3 class="widget-title"><b>Bantuan</b></h3>
                                <div class="footer-desc">
                                    <ul>
                                        <li><a href="index.php?page=carabelanja">Cara Belanja</a></li>
                                        <li><a href="index.php?page=tentang">Tentang Kami</a></li>
                                        <li><a href="index.php?page=produk">Semua Produk</a></li>
                                        <li><a href="index.php?page=kontak">Kontak Kami</a></li>
                                    </ul>
                                </div>
                            </div><br class="visible-xs" />
                        </div>

                        <div class="column col-md-3">
                            <div class="footer-contact">
                                <h3 class="widget-title"><b>Pembayaran & Pengiriman</b></h3>
                                <div class="footer-desc">
                                    <div class="contact-us">
                                        <p>Kami melayani pembayaran dan pengiriman yaitu dengan : <br></p>
                                        <img src="assets/img/cod.png" class="imghsip" width="170" height="79">
                                    </div>
                                </div>
                            </div><br class="visible-xs" />
                        </div><br class="visible-xs" />
                    </div>
                </div>
            </div>

            <div class="bt-powered">
                <div class="container">
                    <div class="row">
                        <div id="powered">
                            <div class="footer-social text-center">
                                <div class="btn-vertical">
                                    <li><a href="https://www.facebook.com/hellsnackstore" target="_blank" class="btn btn-default fa-icon ic_fb" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li> <a href="https://twitter.com/HellSnacks" target="_blank" class="btn btn-default fa-icon ic_twtr" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/hellsnacks/" target="_blank" class="btn btn-default fa-icon ic_ig" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank" class="btn btn-default fa-icon ic_yt" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                </div>
                                <span style="font-size: 15px;">
                                HellSnacks © Copyright 2017 . Allright reserved.
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Javascript -->
        
        <script type="text/javascript" src="vendors/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/jquery.cookie.js"> </script>
        <script type="text/javascript" src="assets/js/jPages.min.js"></script>
        <script type="text/javascript" src="vendors/lightslider/lightslider.js"></script>
        <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
        <script type="text/javascript" src="assets/js/front.js"></script>

    </body>

    </html>
    
                                    
                                    