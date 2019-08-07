<div class="content-inner">
<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Pengguna</h2>
    </div>
</header>
</div>
    <section class="user-view">
            <a href="" class="btn  btn-add-user" data-toggle="modal" data-target="#add_data">
                <i class="fa fa-user-plus"></i> Tambah Pengguna
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
                            <h1 class="text-center text-uppercase"><i class="fa fa-user-plus"></i> Tambah Pengguna Baru</h1>
                            <p>&nbsp;</p>

                            <?php
                            error_reporting(0);
                            $username = strip_tags($_POST['username']);
                            $email = strip_tags($_POST['email']);
                            $password = strip_tags($_POST['password']);
                            $telp = strip_tags($_POST['telp']);
                            $alamat = strip_tags($_POST['alamat']);
                            $role = strip_tags($_POST['role']);

                            $password = md5($password);
                            
                            $query = mysqli_query($koneksi, "INSERT INTO users(username, email, password, telepon, alamat, role) VALUES('$username', '$email','$password', '$telp', '$alamat', '$role')");
                            ?>

                            <form role="form" name="user-form" id="user-form"  method="post">
                                <div class="form-group">
                                    <label class="required">Nama Pengguna :</label>
                                    <input type="text" class="form-control" required="" name="username" id="user_form" placeholder="Masukkan nama pengguna">
                                </div>
                                <div class="form-group">
                                    <label class="required">Email :</label>
                                    <input type="email" class="form-control" required="" name="email" id="email_form" placeholder="example@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="required">Kata Sandi :</label>
                                    <input type="password" class="form-control" required="" name="password"  id="pass_form" placeholder="Masukkan kata sandi">
                                </div>
                                <div class="form-group">
                                    <label class="required">No.Telepon :</label>
                                    <input type="text" class="form-control" required="" name="telp" id="no_form" max-length="12" placeholder="Masukkan no.telepon">
                                </div>
                                <div class="form-group">
                                    <label class="required">Alamat :</label>
                                    <textarea type="text" class="form-control" required="" name="alamat" id="alamat_form" placeholder="Masukkan alamat"></textarea>
                                </div>
                                <input type="hidden" value="user" name="role">
                                <div class="item-align" align="center">
                                    <button class="btn btn-submit-user" type="submit" value="Daftar" id="btn_signup" name="btn-signup">SIMPAN</button>
                                </div>
                        </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal -->
            </div>
            <p>&nbsp;</p>

            <?php
                include './config/config.php';
                $role= "user";
                $query=mysqli_query($koneksi, "SELECT * FROM users where role='$role' ORDER BY id_user DESC");
            ?>
            <div class="table-responsive"> 
                <table class="table"> 
                    <thead> 
                        <tr>
                            <th>Username</th>
                            <th>Alamat User</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                    <?php
                      while ($row=mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                          <td>
                            <?php echo $row['username']; ?>
                          </td>
                          <td>
                            <?php echo $row['alamat']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['telepon']; ?>
                        </td>
                        <td>
                            <a href="content/hapus_user.php?id_user=<?php echo $row['id_user'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda ingin menghapus data ini?')">
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
