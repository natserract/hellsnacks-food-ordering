<?php
 //Redirect ke Halaman Produk jika keranjang belanja masih kosong!
     if(!isset($_SESSION['items']) || count($_SESSION['items'])==0){
        header("location: index.php?page=produk");
    }

    //Redirect ke halaman login jika pelanggan belum login
    if(!isset($_SESSION['user_username'])){
        header("Location: index.php?page=masuk");
        die;
    }
?>


    <title>Checkout <?php echo $title; ?></title>
    <link rel="stylesheet" href="./assets/css/checkout.css">
    <script type="text/javascript" src="./assets/js/checkout.js"></script>

    <!-- Breadcrumber (Riwayat Halaman)-->
    <section class="id-breacrumber">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="./" id="link-color"><i class="fa fa-home"></i></a></li>
                    <li><a id="link-underline">Checkout</a></li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumber -->

    <section class="checkout-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="checkout-content">
                        <form class="checkout-form" name="checkout" method="post" id="checkout_form" action="index.php?page=checkout-proses">
                            <div class="col-sm-7">
                                <div class="billing-fields">
                                    <h3>Alamat Pengiriman</h3>
                                    <p>
                                        <div class="form-group">
                                            <label for="name" class="required">Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control" id="name">
                                        </div>
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p>
                                                <div class="form-group">
                                                    <label for="email" class="required">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email">
                                                </div>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p>
                                                <div class="form-group">
                                                    <label for="telepon" class="required">Telepon</label>
                                                    <input type="text" name="telepon" class="form-control" id="tel">
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                    <p>
                                        <div class="form-group">
                                            <label for="alamat" class="required">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat"></textarea>
                                        </div>
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p>
                                                <div class="form-group">
                                                    <label class="control-label required">Provinsi</label>
                                                    <select name="provinsi" class="form-control">
                                                        <option value="">-- Pilih --</option>
                                                        <option value="Bali">Bali</option>
                                                    </select>
                                                </div>
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p>
                                                <div class="form-group">
                                                    <label class="control-label required" for="kota">Kota</label>
                                                    <select name="kota" class="form-control">
                                                        <option value="">-- Pilih --</option>
                                                        <option value="Denpasar">Denpasar</option>
                                                    </select>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                    <h3>Informasi Tambahan</h3>
                                    <p>
                                        <div class="form-group">
                                            <label for="ket">Catatan Pesanan</label>
                                            <textarea class="form-control" name="ket" id="ket" placeholder="Catatan tentang pesanan Anda, mis. catatan khusus untuk pengiriman"></textarea>
                                        </div>
                                    </p>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div id="order-detail">
                                    <h3>Pesanan Anda</h3>
                                    <table class="shop_table checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Produk</th>
                                                <th class="product-total">Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $total = 0;
                                            if(isset($_SESSION['items'])){
                                            foreach ($_SESSION['items'] as $key => $val) {
                                                $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$key'");
                                                $data = mysqli_fetch_array($query);
                                                $jumlah_harga = $data['produk_harga'] * $val;
                                                $total += $jumlah_harga;
                                                $num = number_format($total,2,",",".");
                                        ?>
                                            <tr class="cart_item">
                                            <?php 
                                                if($val == 0){
                                                    // Tidak ditampilkan(0)
                                                } else {
                                                ?>
                                                <td class="product-name">
                                                    <?php echo $data['produk_nama']; ?>&nbsp; <strong class="product-quantity">× <?php echo number_format($val); ?></strong> 
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="price-amount amount"><span class="price-currencySymbol">Rp. </span><?php echo number_format($data['produk_harga'],2,",","."); ?></span>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                        <?php } } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td><strong><span class="price-amount amount"><span class="price-currencySymbol">Rp. </span><?php echo $num; ?></span></strong> </td>
                                            </tr>
                                        </tfoot>
                                        
                                    </table>
                                </div>
                                    <div id="payment" class="checkout-payment">
                                        <ul class="payment-methods">
                                            <li class="payment-method-cod">
                                                <label for="payment-method-cod">Bayar di Tempat</label>
                                            </li>
                                        </ul>
                                        <div class="form-row place-order">
                                            <button type="submit" class="button alt" name="checkout_place_order" id="place_order"  value="Selesai" data-value="Selesai">Selesai</button>
                                        </div>
                                    </div>
                            </div>
                        </form>
                         

                    </div>
                </div>
            </div>
        </div>
    </section>