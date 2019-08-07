<div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Produk</h2>
        </div>
    </header>
</div>
<section>
    <a href="" class="btn  btn-add-user" data-toggle="modal" data-target="#add_data">
        <i class="fa fa-cart-plus"></i> Tambah Produk
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
                    <h1 class="text-center">
                        <i class="fa fa-cart-plus"></i> Tambah Produk</h1>
                    <p>&nbsp;</p>
                    <form role="form" name="product-form" id="product_form" method="post" enctype="multipart/form-data" action="content/upload-img-produk.php">
                        <div class="form-group">
                            <label class="required">Nama Produk :</label>
                            <input type="text" class="form-control" required="" name="nama_produk" id="user_form" placeholder="Masukkan nama produk">
                        </div>
                        <div class="form-group">
                            <label class="required">Upload Gambar Produk :</label>
                            <input type="file" class="form-control" required="" name="produk_img" id="upload_inp">
                        </div>
                        <div class="form-group">
                            <label class="required">Kategori :</label>
                            <select class="form-control" required="" name="kategori" id="kategori_inp" placeholder="Masukkan ulang kata sandi">
                                <option value="0">Pilih Kategori</option>
                                <?php 
                                            $sql = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori ASC");
                                            while($data = mysqli_fetch_array($sql)){
                                        ?>
                                <option value="<?php echo $data['nama_kategori']; ?>">Serba
                                    <?php echo $data['nama_kategori']; ?> Pedas</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="required">Harga :</label>
                            <input type="number" class="form-control" required="" min="1" name="harga_produk" id="price_inp" placeholder="Masukkan harga produk">
                        </div>
                        <div class="form-group">
                            <label class="required">Keterangan Produk :</label>
                            <textarea type="text" class="form-control ket_produk" maxlength="10" required="" name="ket_produk" id="ket_produk" placeholder="Masukkan Keterangan Produk (Max : 500)"></textarea>
                            <script>
                                CKEDITOR.replace('ket_produk')
                            </script>
                        </div>
                        <div class="form-group">
                            <label class="required">Deskripsi Produk :</label>
                            <textarea type="text" class="form-control" required="" name="desc_produk" id="desc_produk" placeholder="Masukkan alamat"></textarea>
                            <script>
                                CKEDITOR.replace('desc_produk')
                            </script>
                        </div>
                        <div class="item-align" align="center">
                            <button class="btn btn-submit-user" type="submit" value="Daftar" id="btn_signup" name="upload">SIMPAN</button>
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
        <?php
                $query=mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk ASC");
              ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Kategori Produk</th>
                        <th>Harga Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $row['produk_nama']; ?>
                            </td>
                            <td>
                                <?php echo $row['nama_kategori']; ?>
                            </td>
                            <td>
                                <?php echo number_format($row['produk_harga'],2,",","."); ?>
                            </td>
                            <td>
                                <!-- <button class="btn btn-info" data-toggle="modal" data-target="#edit_datas" data-id="<?php echo $row['id_produk']; ?>" id="edit-modal">
                                    <i class="fa fa-pencil"></i> Edit</button> -->
                                <a href="content/hapus_product.php?id_produk=<?php echo $row['id_produk'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda ingin menghapus data ini?')">
                                    <i class="fa fa-close"></i> Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
            <div id="edit_datas" class="modal fade">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="itemalign" align="right">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size: 35px;">
                                &times;
                            </button>
                        </div>
                        <div class="modal-body">
                            <h1 style="color: #000" class="text-center">Edit Produk</h1>
                            <?php 
                                $sql = mysqli_query($koneksi, "SELECT * FROM produk");
                                $data = mysqli_fetch_array($sql);

                            ?>
                            <form role="form" name="edit_product-form" id="edit_product_form" method="post" enctype="multipart/form-data" action="?page=edit-produk&id_produk=<?php echo $data['id_produk']; ?>">
                                <div class="form-group">
                                    <label class="required">Nama Produk :</label>
                                    <input type="text" class="form-control" required="" name="edit_nama_produk" id="edit_nama_produk">
                                </div>
                                <div class="form-group">
                                    <label class="required">Upload Gambar Produk :</label>
                                    <input type="file" class="form-control" required="" name="edit_produk_img" id="edit_upload_inp">
                                </div>
                                <div class="form-group">
                                    <label class="required">Kategori :</label>
                                    <select class="form-control" required="1" name="edit_kategori" id="edit_kategori_inp" placeholder="Masukkan ulang kata sandi">
                                        <option value="0">Pilih Kategori</option>
                                        <option value="Abon">Serba Abon Pedas</option>
                                        <option value="Basreng">Serba Basreng Pedas</option>
                                        <option value="Bawang Goreng">Serba Bawang Goreng Pedas</option>
                                        <option value="Kentang">Serba Kentang Pedas</option>
                                        <option value="Keripik">Serba Keripik Pedas</option>
                                        <option value="Kerupuk">Serba Kerupuk Pedas</option>
                                        <option value="Rendang">Serba Rendang Pedas</option>
                                        <option value="Singkong">Serba Singkong Pedas</option>
                                        <option value="Makaroni">Serba Makaroni Pedas</option>
                                        <option value="Sambal">Serba Sambal Pedas</option>
                                        <option value="Instan">Serba Instan Pedas</option>
                                        <option value="Serbi">Serba Serbi Pedas</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required">Harga :</label>
                                    <input type="number" class="form-control" required="" min="1" name="edit_harga_produk" id="edit_harga_produk" placeholder="Masukkan harga produk">
                                </div>
                                <div class="form-group">
                                    <label class="required">Keterangan Produk :</label>
                                    <textarea type="text" class="form-control ket_produk" maxlength="10" required="" name="edit_ket_produk" id="edit_ket_produk"
                                        placeholder="Masukkan Keterangan Produk (Max : 500)"></textarea>
                                    <script>
                                        CKEDITOR.replace('ket_produk')
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="required">Deskripsi Produk :</label>
                                    <textarea type="text" class="form-control" required="" name="edit_desc_produk" id="edit_desc_produk" placeholder="Masukkan alamat"></textarea>
                                    <script>
                                        CKEDITOR.replace('desc_produk')
                                    </script>
                                </div>
                                <div class="item-align" align="center">
                                    <button class="btn-update" type="submit" value="Simpan" id="btn_signup" name="update">UPDATE</button>
                                    <button class="btn-reset" data-dismiss="modal" value="Batal" id="btn_signup">BATAL</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

    </div>
    <script>
        $(document).ready(function () {
            $('.table').DataTable();
            $("#edit_datas").on('show.bs.modal', function () {
                var getIdFromRow = $(event.target).closest('button').data('id');
                $.ajax({
                    url: 'content/data_produk.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        'id': getIdFromRow
                    },
                    success: function (data) {
                        if (data.status == 'success') {
                            $("#edit_nama_produk").val(data.edit_nama_produk);
                            $("#edit_harga_produk").val(data.edit_harga_produk);
                            $("#edit_ket_produk").val(data.edit_ket_produk);
                            $("#edit_desc_produk").val(data.edit_desc_produk);
                        } else {
                            $(".modal-body").html(data.message);
                        }
                    },
                    error: errorHandler
                })
            });

            function errorHandler(jqXHR, exception) {
                if (jqXHR.status === 0) {
                    $(".modal-body").html('Not connect.\n Verify Network.');
                } else if (jqXHR.status == 404) {
                    $(".modal-body").html('Requested page not found. [404]');
                } else if (jqXHR.status == 500) {
                    $(".modal-body").html('Internal Server Error [500].');
                } else if (exception === 'parsererror') {
                    $(".modal-body").html('Requested JSON parse failed.');
                } else if (exception === 'timeout') {
                    $(".modal-body").html('Time out error.');
                } else if (exception === 'abort') {
                    $(".modal-body").html('Ajax request aborted.');
                } else {
                    $(".modal-body").html('Uncaught Error.\n' + jqXHR.responseText);
                }
            }
        });
    </script>

</section>




<!-- 
    Form Add Product 
     - Nama Produk
     - Gambar (Upload)
     - Jumlah
     - Kategori
     - Short Description
     - Description
     - Harga

    -->