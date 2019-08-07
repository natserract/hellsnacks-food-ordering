<?php 
    if (isset($_GET['kategori'])) { 
        $kategori=$_GET['kategori']; 
        $query2 = mysqli_query($koneksi,"SELECT * FROM produk WHERE nama_kategori='$kategori'"); 
        $query = $query2; 
    }else { 
        $query1 = mysqli_query($koneksi, "SELECT * FROM produk"); 
        $query = $query1; 
    } 
?> 

<?php 
  if (isset($_GET['kategori'])) { 
    $kategori=$_GET['kategori'];
    $sql = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama_kategori='$kategori'");
    $data = mysqli_fetch_array($sql);
    echo "<title>Serba ".$data['nama_kategori']." Pedas $title</title>";
  } else{
        echo "<title>HellSnacks Menjual Cemilan Pedas $title</title>";
  }
?>
<link rel="stylesheet" href="./assets/css/produk.css" />
<script type="text/javascript" src="./assets/js/produk.js"></script>

<!-- Breadcrumber (Riwayat Halaman)-->
<section class="id-breacrumber">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="./" id="link-color"><i class="fa fa-home"></i></a></li>
                <?php 
                if (isset($_GET['kategori'])) { 
                    $kategori=$_GET['kategori'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama_kategori='$kategori'");
                    $data = mysqli_fetch_array($sql);
                    echo "<li style='text-transform: capitalize;'><a  id='link-underline'>Serba ".$data['nama_kategori']." Pedas</a></li>";
                } else {
                    echo "<li><a id='link-underline'>HellSnacks Menjual Cemilan Pedas</a></li>";
                }
                ?>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumber -->

<section class="product-sec" id="product-list" style="color: #000">
<div class="container">
    <div class="row">
        <div class="col-sm-9 pull-right" id="content-product">
            <div class="row">
                    <ul class="list" id="itemContainer">
                    <?php 
                     $sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC");
                    
                        while ($data = mysqli_fetch_array($query)) { 
                        ?> 
                        <li>
                            <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="hvr-product">
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
                            </div>
                        </li>
                    <?php
                        }
                       
                    ?>
                </ul>
            </div>
             
            <div class="pagination-item text-center">
                <div class="holder"></div>
            </div>
            
        </div>

        <div class="col-md-3">
            <div class="box bt-category">
                <div class="box-content">
                    <aside id="product_categories" class="product-categories">
                        <h3 class="widget-title"><strong>Kategori Produk</strong></h3>
                        <ul class="product-categories list-group">
                            <?php
                                 $sql = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori ASC");
                                 while($data = mysqli_fetch_array($sql)){
                            ?>
                            <li class="list-group-item cat-item6">
                                <a href="index.php?page=produk&kategori=<?php echo $data['nama_kategori']; ?>">Serba <?php echo $data['nama_kategori']; ?> Pedas</a>
                            </li>
                            
                        <?php 
                                }
                        ?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

</div>
<!-- End Container -->

</section>
<!-- End Section -->
