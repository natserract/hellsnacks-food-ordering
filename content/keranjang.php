<title>Keranjang Belanja <?php echo $title; ?></title>
<link rel="stylesheet" href="./assets/css/keranjang.css">

<!-- Breadcrumber (Riwayat Halaman)-->
<section class="id-breacrumber">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="./" id="link-color"><i class="fa fa-home"></i></a></li>
                <li><a id="link-underline">Keranjang Belanja</a></li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumber -->


<section id="cart_content" style="color: #000">
    <div class="container">
        <div class="row">
                <div class="col-sm-12">
                    <div class="entry-content">
                        <table id="cart" class="table shop-table table-responsive table-bordered table-condensed">
                        <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Produk</th>
                                    <th class="product-price">Harga</th>
                                    <th class="product-quantity">Jumlah</th>
                                    <th class="product-subtotal">Subtotal</th>
                                </tr>
                            </thead>
                            <?php
                                $total = 0;
                                $sub = 0;
                                $val = 0;
                                if (isset($_SESSION['items'])) {
                                foreach ($_SESSION['items'] as $key => $val) {
                                    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$key'");
                                    $data = mysqli_fetch_array($query);
                                    $jumlah_harga = $data['produk_harga'] * $val;
                                    $jml = number_format($jumlah_harga,2,",",".");
                                    $total += $jumlah_harga;
                                    $total += $sub;
                                    $num = number_format($total,2,",",".");
                                    $hrg = number_format($data['produk_harga'],2,",",".");
                            ?>
                            
                                <tbody>
                               
                                <?php 
                                //Jika Jumlah 0 , maka kosong!
                                if($val == 0){
                                    if (isset($_GET['barang_id'])) {
                                        $barang_id = $_GET['barang_id'];
                                        if (isset($_SESSION['items'][$barang_id])) {
                                            unset($_SESSION['items'][$barang_id]);
                                        }
                                    }
                                } else {
                                    ?>
                                   
                                    <tr>
                                        <td class="product-remove">
                                            <a href="index.php?page=action&act=del&barang_id=<?php echo $key; ?>&amp;ref=index.php?page=keranjang" class="remove" aria-label="Remove this item">×</a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="index.php?page=detail&id=<?php echo $data['id_produk']; ?> <?php echo $data['produk_nama']; ?>">
                                                <img width="58" height="72" src="./assets/img/product/<?php echo $data['produk_image'] ?>" class="item_image" alt="" srcset="./assets/img/product/<?php echo $data['produk_image'] ?>" sizes="(max-width: 58px) 100vw, 58px">
                                            </a>
                                        </td>
                                        <td class="product-name" data-title="Product">
                                            <a href="index.php?page=detail&id=<?php echo $data['id_produk'] ?> <?php echo $data['produk_nama']; ?>">
                                                <?php echo $data['produk_nama'] ?>
                                            </a>
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            <span class="price-amount amount">
                                                <span class="price-currencySymbol">Rp.</span> 
                                                    <?php echo $hrg ?>
                                                </span>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity">
                                                <!-- Mengurangi item
                                                <a href="index.php?page=action&act=min&amp;barang_id=<?php echo $key ?>&amp;ref=index.php?page=keranjang" class="btn btn-default btn-quantity" id="plus">
                                                    <i class="fa fa-minus"></i>
                                                </a> -->
                                              
                                                <!-- <input type="number" class="form-control" value="<?php echo $val ?>" max="<?php echo $data['jml_barang']; ?>" min="1"> -->
                                                      
                                                <form action="index.php?page=action&act=update&amp;barang_id=<?php echo $data['id_produk']; ?>&amp;ref=index.php?page=keranjang&id=<?php echo $data['id_produk'];?>" method="post">        
                                                    <input type="number" name="quantity" class="input-text qty text"  min="1" value="<?php echo  $val ?>" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric"> 
                                                    <button type='submit' name='update' class="btn-quantity">Update</button>   
                                                </form>
                                                
                                               
                                                <!-- Menambah item 
                                               <a href="index.php?page=action&act=plus&amp;barang_id=<?php echo $key ?>&amp;ref=index.php?page=keranjang" class="btn btn-default btn-quantity">
                                                    <i class="fa fa-plus"></i>
                                                </a> -->
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <span class="price-amount amount"><span class="price-currencySymbol">Rp.</span> 
                                            <?php echo $jml ?>
                                            </span>
                                        </td>
                                    </tr> 
                                   
                                <?php } ?>
                            <?php } } ?>

                            <?php
                                if($total == 0){
                                    echo '
                                        <td colspan="6" align="center">
                                            <h4>Keranjang Anda saat ini kosong.</h4>
                                        </td>
                                ';
                                }
                            ?>
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="go-shopping">
                                            <a href="javascript:;" class="btn btn-default" name="to-shopping" value="" onclick="window.location.href='index.php?page=produk'">
                                                <i class="fa fa-angle-double-left"></i> Lanjutkan Belanja
                                            </a>
                                        </div>
                                        <?php 
                                        if($total == 0){
                                            //tidak ada yg ditampilkan(0)
                                        } else {
                                            ?>
                                             <a href='index.php?page=action&act=empty&amp;barang_id=<?php echo $data['id_produk']; ?>&amp;ref=index.php?page=keranjang' class='button' name='empty'>Hapus Keranjang</a>
                                       <?php  } ?>
                                </tr>
                               
                                
                            </tbody>
                            
                        </table>

                        <?php
                        if($total == 0){
                        //tidak ada yg ditampilkan(0)
                        } else {
                            echo "
                                <div class='cart-collaterals'>
                                    <div class='cart_totals'>
                                        <h2>Total Belanja</h2>
                                        <table cellspacing='0' class='shop_table table-responsive shop_table_responsive'>
                                            <tbody>
                                                
                                                <tr class='order-total'>
                                                    <th>Total</th>
                                                    <td data-title='Total'><strong><span class='price-amount amount'><span class='price-currencySymbol'>Rp.</span> $num</span></strong> </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class='bt-proceed-to-checkout'>
                                            <a href='index.php?page=checkout' class='btn checkout-button button'>Selesai Berbelanja</a>
                                        </div>
                                    </div>
                                </div> ";
                        } ?>
                    </div>
                </div>
               
              
        </div>
        <!--End Row -->
        
    </div>
    <!-- End Container-->

</section>

