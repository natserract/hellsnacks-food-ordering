

<title>Hell Snacks | Jual Cemilan Pedas</title>
<link rel="stylesheet" href="vendors/pace/themes/white/pace-theme-flash.css">

<!-- Loader -->
<div class="cover"></div>

<script>
    $('html, body').css({
        'overflow-y': 'scroll',
        'height': '100%',
        'cursor': 'wait'
    });

    Pace.on("done", function() {
        $(".cover").fadeOut(2000);
        $('html, body').removeAttr('style')
    });
</script>
<!-- End Loader-->


<!--slider-->
<section id="header_full_width">
    <div class="slider_images">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="assets/img/slide3.jpg" alt="Selamat Datang di HellSnacks">
                </div>
                <!-- 
                <div class="item">
                    <img src="assets/img/slide.jpg" alt="HellSnacks">
                </div>

                <div class="item">
                    <img src="assets/img/slide.jpg" alt="HellSnacks">
                </div> -->
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <script>
        </script>
    </div>
</section>
<!--end slider-->


<!-- Banner -->
<section class="banner-product">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="content-box-image">
                    <img src="assets/img/banner1.jpg" class="img-responsive">
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-box-image">
                    <img src="assets/img/banner2.jpg" class="img-responsive">
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-box-image">
                    <img src="assets/img/banner3.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- New Product -->
<section class="product-featured" style="color: #000">
    <div class="container">
        <div class="row">
            <div class="box-heading" id="tabcontent">
                <div class="col-md-12 bt-pro btn-group" align="center">
                    <h2>PRODUK TERBARU</h2>
                    <hr>
                </div>

                <!-- Product -->
                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC LIMIT 8");
	                while($data = mysqli_fetch_array($sql)){
                ?>
                <div class="col-md-3 hvr-product">
                    <ul class="caption-style-4">
                        <li>
                            <a href="index.php?page=detail&id=<?php echo $data['id_produk']; ?> <?php echo $data['produk_nama']; ?>" title="<?php echo $data['produk_nama']; ?>">
                                <div class="img-hover">
                                    <img alt="<?php echo $data['produk_nama']; ?>" class="img-responsive image" src="./assets/img/product/<?php echo $data['produk_image']; ?>" title="<?php echo $data['produk_nama']; ?>">
                                </div>
                            </a>
                            <div class="caption">
                                <div class="caption-text">
                                    <a href="index.php?page=detail&id=<?php echo $data['id_produk']; ?> <?php echo $data['produk_nama']; ?>"  class="btn button_add_cart"><i class="fa fa-search"></i> Lihat Detail Produk</a>
                                </div>
                            </div>
                        </li>
                        <div class="name elipsis text-center">
                            <a href="index.php?page=detail&id=<?php echo $data['id_produk']; ?> <?php echo $data['produk_nama']; ?>" class="elipsis" id="elipsis" title="<?php echo $data['produk_nama']; ?>"><?php echo $data['produk_nama']; ?></a>
                        </div>
                        <span style="font-size: 30px; ">Rp. </span><span class="price price-new text-center"><?php echo number_format($data['produk_harga'],2,",","."); ?></span>
                        <br> &nbsp;
                    </ul>
                </div>
                <?php
                    }
                ?>
                <!-- End Product -->

                <div class="col-md-12"><br>
                    <div class="see-our-product text-center">
                        <button class="btn btn-default" id="btn-see-all" onclick="window.location.href='index.php?page=produk'">LIHAT SEMUA PRODUK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product -->

<br><br><br>

<!-- Product Category -->
<section class="product-category" style="color: #000">
    <div class="container">
        <div class="row">
            <div class="col-md-12 bt-pro btn-group" align="center">
                <h2>KATEGORI PRODUK</h2>
                <hr>
            </div>

            <div class="col-md-12 item">
                <ul id="content-slider" class="content-slider">
                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori ASC ");
                    while($data = mysqli_fetch_array($sql)){
                ?>
                    <li>
                        <a href="index.php?page=produk&kategori=<?php echo $data['nama_kategori']; ?>">
                            <div class="blur"></div>
                            <img src="assets/img/product/<?php echo $data['image'];?>" class="img-responsive">
                        </a>
                        <span>Serba <?php echo $data['nama_kategori']; ?> Pedas</span>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section><br><br><br>
<!-- End Product Category -->

<!-- Contact Featured -->
<section class="et_pb_fullwidth_header et_pb_module et_pb_bg_layout_dark et_pb_text_align_center  et_pb_fullwidth_header_0">
    <div class="et_pb_fullwidth_header_container center">
        <div class="header-content-container center">
            <div class="header-content">
                <h1>
                    <p>Anda memiliki pertanyaan atau ingin berdiskusi? SMS / Whatsapp di 0818 0680 0630 (hellsnacks) kami dengan senang hati berdiskusi dengan Anda</p>
                </h1>
                <div class="btn-contact-support">
                    <button class="btn btn-default btn-lg" onclick="window.location.href='index.php?page=kontak'"><i class="fa fa-envelope"></i> KONTAK KAMI</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  End Contact Featured -->