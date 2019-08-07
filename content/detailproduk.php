    <?php
        $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$_GET[id]'");
        $data  = mysqli_fetch_array($query);
    ?>
    <title><?php echo $data['produk_nama']; echo $title;?> </title>
    <link rel="stylesheet" href="./assets/css/produk.css" />
    <script type="text/javascript" src="./assets/js/produk.js"></script>

    <!-- Breadcrumber (Riwayat Halaman)-->
    <section class="id-breacrumber">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="./" id="link-color"><i class="fa fa-home"></i></a></li>
                    <li style="text-transform: capitalize;">
                        <a href="index.php?page=produk&kategori=<?php echo $data['nama_kategori']; ?>" id="link-underline">
                            Serba <?php echo $data['nama_kategori']; ?> Pedas
                        </a>
                    </li>
                    <li>
                        <a id="link-underline">
                            <?php echo $data['produk_nama']; ?>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumber -->

    <!--index.php page Detail Produk  -->
    <section class="product-main-content" style="color: #000">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="product-image">
                        <a href="#img_lightbox" title="<?php echo $data['produk_nama']; ?>">
                            <img width="540" height="540" src="./assets/img/product/<?php echo $data['produk_image']; ?>" alt="<?php echo $data['produk_nama']; ?>" title="<?php echo $data['produk_nama']; ?>" class="img-responsive">
                        </a>
                        <a href="#_" class="lightbox" id="img_lightbox">
                            <div class="itemalign" align="center">
                                <img src="./assets/img/product/<?php echo $data['produk_image']; ?>" alt="<?php echo $data['produk_nama']; ?>" title="<?php echo $data['produk_nama']; ?>" class="img-responsive ">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="summary">

                        <!-- Nama Produk -->
                        <h2 class="product-title">
                            <?php echo $data['produk_nama']; ?>
                        </h2>
                        <!-- Nama Produk End Here! -->

                        <!-- Harga Produk -->
                        <div class="product-price">
                            <p class="price">
                                <span class="price-amount amount">
                                <span class="price-currency-symbol">Rp .</span>
                                <?php echo number_format($data['produk_harga'],2,",","."); ?>
                                </span>
                            </p>
                        </div>
                        <!-- Harga Produk End -->

                        

                        <!-- Category -->
                            <div class="category-i">
                                <ul class="product-info-head">
                                <?php 
                                if (isset($_GET['kategori'])) { 
                                    $kategori=$_GET['kategori'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama_kategori='$kategori'");
                                    $data = mysqli_fetch_array($sql);
                                } else {
                                    ?>
                                    <li>Kategori <?php echo $data['nama_kategori']; ?> Pedas</li>
                                 <?php } ?>
                                </ul>
                            </div>
                        <!-- Category End Here! -->

                        <!-- Deskripsi Produk -->
                        <div class="product-description">
                            <p>
                                <?php echo $data['short_desc']; ?>
                            </p>
                        </div>
                        <!-- Deskripsi Produk End Here! -->

                        <br>

                        <!-- Produk -->
                        <?php
                            $product_array = mysqli_query($koneksi, "SELECT * FROM produk");
                            if (!empty($product_array)) { 
                            foreach($product_array as $key=>$value){
                            } }
                        ?>
                        <form class="cart" method="post" action="index.php?page=action&act=add&amp;barang_id=<?php echo $data['id_produk']; ?>&amp;ref=index.php?page=keranjang&id=<?php echo $data['id_produk'];?>">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="quantity">
                                        <input type="number" name="quantity" class="qty" value="1" min="1" title="QTY" >
                                    </div>
                                </div>
                                <br class="visible-sm visible-xs">
                                <div class="col-md-8">
                                    <button type="submit" class="itemAdd btn" name="submit" data-loading-text="Sedang di proses..."><i class="fa fa-shopping-cart"></i> Tambah ke Keranjang</button>
                                </div>
                                <br class="visible-sm visible-xs">
                            </div>
                        </form>
                        <!-- Produk End -->

                    </div>
                </div>
            </div>
            
            <br>
            <div class="card">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">KETERANGAN</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <h2>Keterangan Produk</h2>
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <?php echo $data['long_desc']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
