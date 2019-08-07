<div class="content-inner">
<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Order</h2>
    </div>
</header>
</div>
    <section class="user-view">
            <?php
                include './config/config.php';
                $query=mysqli_query($koneksi, "SELECT order_header.*, order_detail.*  FROM  order_header INNER JOIN order_detail ON order_header.id_order = order_detail.id_order");
            ?>
            <div class="table-responsive"> 
                <table class="table"> 
                    <thead> 
                        <tr>
                            <th>ID Order</th>
                            <th>Tanggal</th>
                            <th>Nama Pengguna</th>
                            <!-- <th>Nama Produk</th> -->
                            <th>Jumlah Barang</th>
                            <!-- <th>Harga Satuan</th> -->
                            <th>Subtotal</th>
                            <th>Total</th>
<<<<<<< HEAD
                            <th></th>
=======
                            <th>Aksi</th>
>>>>>>> 1362353722e4b2920f7f61cd02a723be679633fd
                        </tr> 
                    </thead> 
                    <tbody> 
                    <?php
                      while ($row=mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                          <td>
                            <?php echo $row['id_order']; ?>
                          </td>
                          <td>
                            <?php echo $row['tgl']; ?>
                          </td>
                          <td>
                            <?php echo $row['username']; ?>
                          </td>
                          <!-- <td>
                            <?php echo $row['produk_nama']; ?>
                        </td> -->
                        <td>
                            <?php echo $row['jml_barang']; ?>
                        </td>
                        <!-- <td>
                            <?php echo $row['telepon']; ?>
                        </td> -->
                        <td>
                            <?php echo $row['subtotal']; ?>
                        </td>
                        <td>
                            <?php echo $row['total']; ?>
                        </td>
                        <td>
                            <a href="content/hapus_order.php?id_order=<?php echo $row['id_order'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda ingin menghapus data ini?')">
                                <i class="fa fa-close"></i> Hapus
                            </a>
                        </td>
                      </tr> 
                    <?php } ?>
                    </tbody> 
                </table> 
                <script>
                    $(document).ready(function(){
                    $('.table').DataTable();
                    });
                </script>
            </div>  

    </section>
