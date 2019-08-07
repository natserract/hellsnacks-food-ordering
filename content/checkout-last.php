<?php 
    if(!isset($_SESSION['user_username'])){
        header("Location: ../");
    }
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$key'");
    $data = mysqli_fetch_array($query);
?>


<title>Checkout
    <?php echo $title; ?>
</title>
<link rel="stylesheet" href="./assets/css/checkout-last.css">

<!-- Breadcrumber (Riwayat Halaman)-->
<section class="id-breacrumber">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="./" id="link-color">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a id="link-underline">Checkout</a>
                </li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumber -->
<<<<<<< HEAD
<section class="checkout-suc text-center" style="color: #000">
    <div class="container">
        <h3 style="color: #000">Terima kasih. Pesanan Anda telah diterima.</h3>
        <br/>
        <div class="row">
            <div class="col-md-12">
=======
<section class="checkout-suc" style="color: #000">
    <div class="container">
        <h3 style="color: #000">Terima kasih. Pesanan Anda telah diterima.</h3>
        <table class="table table-bordered detail-order">
            <thead>
                <tr>
                    <th>
                        No.Pesanan
                    </th>
                    <th>
                        Tanggal
                    </th>
                    <th>
                        Total
                    </th>
                    <th>
                        Metode Pembayaran
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        20
                    </td>
                    <td>
                        14 November 2017
                    </td>
                    <td>
                        Rp. 20.000,00
                    </td>
                    <td>
                        <span>Cash On Delivery</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-condensed table-detail">
                        <thead>
                            <tr>
                                <th>
                                    Produk
                                </th>
                                <th>
                                    Total
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href='index.php?page=detail&id=<?php echo $data[' id_produk '] ?> <?php echo $data['produk_nama ']; ?>' class="product-name">Sambal Bawang Goreng</a> x
                                    <span class="quantity">2</span>
                                    <br>
                                    <span>
                                        <strong>Subtotal :</strong>
                                    </span>
                                    <br>
                                    <span>
                                        <strong>Metode Pembayaran :</strong>
                                    </span>
                                    <br>
                                    <span>
                                        <strong>Total :</strong>
                                    </span>
                                </td>
                                <td>
                                    <span class="total">Rp. 20.000</span>
                                    <br>
                                    <span class="subtotal">Rp. 20.000</span>
                                    <br>
                                    <span class="payment-method">Cash On Delivery</span>
                                    <br>
                                    <span class="total">Rp. 20.000</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
                <a href="javascript:;" class="btn to-shopping" name="to-shopping" value="" onclick="window.location.href='index.php?page=produk'">
                    <i class="fa fa-angle-double-left"></i> Lanjutkan Belanja
                </a>
                <a href="javascript:;" class="btn view-order" onclick="window.location.href='index.php?page=pesanan'">
                    Lihat Detail Pesanan
                </a>
            </div>
<<<<<<< HEAD
            <br>
            </div>
=======
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
        </div>
    </div>
</section>