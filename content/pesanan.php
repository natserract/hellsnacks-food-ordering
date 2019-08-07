

<title>
    Pesanan Saya
    <?php echo $title; ?>
</title>
<link rel="stylesheet" href="./assets/css/pesanan.css">

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
                    <a id="link-underline">Pesanan Saya</a>
                </li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumber -->


<?php 
    //Redirect ke halaman login jika pelanggan belum login
    if(!isset($_SESSION['user_username'])){
        header("Location: index.php?page=masuk");
        die;
    }
?>

<section class="order-sec" id="product_sec" style="color: #000">
    <div class="container">
        <div class="row">
            <div class="itemalign" align="center">
                <h2>Pesanan Saya</h2>
            </div>
            <?php 
                    $user_username = $_SESSION['user_username'];
                    $query = $koneksi->query("SELECT * FROM order_header  WHERE username = '".$user_username."'");
                    // $query2 = $koneksi->query("SELECT * FROM order_header INNER JOIN produk ON id_produk = id_produk");
                    // $obey = mysqli_fetch_array($query2);

<<<<<<< HEAD
=======
                    $query2 = $koneksi->query("SELECT * FROM order_header WHERE username = '".$user_username."'");
                    $obj = mysqli_fetch_array($query2);

>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
                    $query3 = $koneksi->query("SELECT * FROM order_detail");
                    $obey2 = mysqli_fetch_array($query3);               

                    /* Status Order */
                    if($obj['status'] == 0){
                        $statusCheck = "Belum di Proses";
                    }
                    if($obj['status'] == 1){
                        $statusCheck = "Sedang di Proses";
                    }
                    if($obj['status'] == 2){
                        $statusCheck = "Ditolak";
                    }
                    if($obj['status'] == 3){
                        $statusCheck = "Selesai";
                    }
<<<<<<< HEAD
=======

>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd

                     $metode_bayar = 'Cash On Delivery';


                   ?>
            <div class="col-md-10">
                 <?php 
                    if( $query ) {
                    while ($data = mysqli_fetch_array($query)) { 
                    ?>
<<<<<<< HEAD
=======
            <div class="col-md-10">
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
                <div class="table-responsive">
                    <table class="table table-bordered table-order">
                        <h3 class="id-order-header">#Order ID -
                            <?php echo $data['id_order'] ?>
                        </h3>
                        <hr>
                        <thead>
                            <tr>
                                <th>Tanggal Pemesanan</th>
<<<<<<< HEAD
=======
                                <th>Status</th>
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
                                <th>Nama Pengguna</th>
                                <th>Jumlah Barang</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
<<<<<<< HEAD
                           
=======
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
                            <tr>
                                <td>
                                    <?php echo date('d F Y',strtotime($data['tgl'])); ?>
                                </td>
                                <td>
<<<<<<< HEAD
=======
                                    <?php echo $statusCheck; ?>
                                </td>
                                <td>
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
                                    <?php echo $data['username']; ?>
                                </td>
                                <td>
                                    <?php echo $data['jml_barang'] ?>
                                </td>
                                <td>Rp.
                                    <?php echo number_format($data['total'],2,",","."); ?>
                                </td>
                                <td>
<<<<<<< HEAD
                                <a href="index.php?page=hapus_pesanan&id_order=<?php echo $data['id_order']; ?>" onclick="return confirm('Apakah Anda yakin ingin membatalkan pesanan?')">
                                    <button class="btn btn-batal-order" data-title="Batal Pesan" data-placement="bottom">        
                                            <i class="fa fa-trash"></i>
                                    </button>
                                </a>
=======
                                    <button class="btn btn-view-order" data-toggle="modal" data-target="#viewOrder" data-title="Detail Pesanan" data-placement="bottom">
                                        <span>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </button>
                                    <button class="btn btn-batal-order" data-title="Batal Pesan" data-placement="bottom">
                                        <span>
                                            <i class="fa fa-trash"></i>
                                        </span>
                                    </button>
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd

                                    <script>
                                        $(function () {
                                            $('.btn-view-order').tooltip();
                                            $('.btn-batal-order').tooltip();
                                        });
                                    </script>
                                </td>
                            </tr>
<<<<<<< HEAD

                        </tbody>
                    </table>
                   
                    <p>&nbsp;</p>
                </div>
                  <?php } } ?>
            </div>
            
=======
                        </tbody>
                    </table>
                    <p>&nbsp;</p>
                </div>
            </div>
            <?php } } ?>
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
            <!-- Show Modal -->
            <div class="modal fade" id="viewOrder">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="itemalign" align="right">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size: 35px;">&times;</button>
                        </div>
                        <br>
                        <h3 class="text-uppercase h3-header">
                            <strong>Detail Pesanan</strong>
                        </h3>
                        <br>
                        <div class="article">
                            <div class="view-order">
<<<<<<< HEAD
                                <!-- <span>
                                    <strong>Order #<?php echo $obey2['id_order_d'] ?>
=======
                                <span>
                                    <strong>Order #
                                        <?php echo $obey2['id_order_d'] ?>
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
                                    </strong> ditempatkan pada tanggal
                                    <strong>
                                        <?php echo date('d F Y',strtotime($obj['tgl'])); ?>
                                    </strong> dan saat ini
                                    <strong>
                                        <?php echo $statusCheck; ?>
                                    </strong>.
<<<<<<< HEAD
                                </span> -->
                                <div class="order-details">
                                    <div class="table-responsive">
                                     
=======
                                </span>
                                <div class="order-details">
                                    <h3>
                                        <b>Detail Pesanan</b>
                                    </h3>
                                    <div class="table-responsive">
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Produk
                                                    </th>
                                                    <th>
<<<<<<< HEAD
                                                        SubTotal
=======
                                                        Total
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
<<<<<<< HEAD
                                               <?php
                                              
                                                while($row = mysqli_fetch_array($query_pesan)){
                                                    $total += $row['subtotal'];
                                               ?>
                                                <tr>
                                                    <td>
                                                        <a href='#'><?php echo $row['produk_nama']; ?></a> x
                                                        <span class="quantity"><?php echo $row['jumlah']; ?></span><br>
                                                    </td>
                                                    
                                                    <td>
                                                        <span class="subtotal"><?php echo $row['subtotal']; ?></span>
                                                        
                                                    </td>
                                                    
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                   
                                    <p>&nbsp;</p>
                                     <div class="table-responsive">
                                     
                                        <table class="table">
                                            <tbody>
                                               
                                                <tr>
                                                    <td>
                                                       <span>Metode Pembayaran</span>
                                                       <br>
                                                        <span>Total</span>
                                                    </td>
                                                   
                                                    <td>
                                                       
                                                        <?php
                                                           echo $metode_bayar;
                                                        ?><br />
                                                          <?php echo $total; ?>
                                                    </td>
                                                    
                                                </tr>

=======
                                                <tr>
                                                    <td>
                                                        <a href='#'>Sambal Bawang Goreng</a> x
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
                                                        <span class="payment-method text-muted">Cash On Delivery</span>
                                                        <br>
                                                        <span class="total">Rp. 20.000</span>
                                                    </td>
                                                </tr>
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
<<<<<<< HEAD
                                
=======
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Show Modal -->
    <p>&nbsp;</p>
    </div>
    </div>
</section>