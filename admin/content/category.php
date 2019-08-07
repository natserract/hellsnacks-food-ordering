<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
     <div class="container-fluid">
       <h2 class="no-margin-bottom">Kategori Produk</h2>
     </div>
  </header>
</div>
<?php
    include './config/config.php';
    $query=mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
?>
<section class="produk-sec">
 <a href="" class="btn  btn-add-user" data-toggle="modal" data-target="#add_data">
            <i class="fa fa-plus"></i> Tambah Kategori
      </a>
      <div class="modal fade" id="add_data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="itemalign" align="right">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size: 35px;">
                            &times;
                        </button>
                    </div>  
                        <div class="modal-body">
                        <h1 class="text-center text-uppercase"><i class="fa fa-sitemap"></i> Tambah Kategori Baru</h1>
                            <p>&nbsp;</p>
                            <form role="form" name="category-form" id="category_form"  method="post" enctype="multipart/form-data" action="content/upload-img-kategori.php">
                                <div class="form-group">
                                    <label class="required">Nama Kategori :</label>
                                    <input type="text" class="form-control" required="" name="nama_kategori" id="user_form" placeholder="Masukkan nama kategori">
                                </div>
                                <div class="form-group">
                                    <label class="required">Upload Gambar Kategori :</label>
                                    <input type="file" class="form-control" required="" name="gambar_kategori" id="upload_inp">
                                </div>
                                <div class="item-align" align="center">
                                    <button class="btn btn-submit-user" type="submit" value="Daftar" id="btn_signup" name="upload-kategori">SIMPAN</button>
                                </div>
                        </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal -->
            </div>
            <p>&nbsp;</p>
            <div class="table-responsive"> 
                <table class="table"> 
                    <thead> 
                        <tr>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead> 
                    <tbody> 
                    <?php
                      while ($row=mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td>Serba <?php echo $row['nama_kategori']; ?> Pedas</td>
                            <td>
                                <a href="content/hapus_category.php?id_kategori=<?php echo $row['id_kategori'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda ingin menghapus data ini?')"><i class="fa fa-close"></i> Hapus</a>
                            </td>
                      </tr> 
                    <?php } ?>
                    </tbody> 
                </table> 
            </div>  
            <script>
                $(document).ready(function(){
                  $('.table').DataTable();
                });
            </script>
    </section>