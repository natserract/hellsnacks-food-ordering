<?php
    error_reporting(FALSE);
    if(isset($_SESSION['user_username'])){
        header("Location: index.php?page=beranda");
    }
?>

<title>Daftar <?php echo $title; ?></title>
<link rel="stylesheet" href="assets/css/daftar.css" />
<script type="text/javascript" src="assets/js/daftar.js"></script>


<div class="signup signup-action">

    <!-- Breadcrumber (Riwayat Halaman)-->
<section class="id-breacrumber">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="./" id="link-color"><i class="fa fa-home"></i></a></li>
                <li><a id="link-underline">Daftar</a></li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumber -->

    <!--content-->
    <section class="id-sign-up signup-action">
        <div class="container">
            <div class="row">
                <div class="page-title text-center" style="color:#000">
                    <div class="itemalign" align="center">
                        <h2 class="text-uppercase"><strong>Daftar Sekarang</strong></h2>
                    </div>
                </div>

                <div class="signup-form">
                <?php 
                        if(isset($_POST['btn-signup'])){
                            $uname = strip_tags($_POST['username']);
                            $email = strip_tags($_POST['email']);
                            $upass = strip_tags($_POST['password']);
                            $utelp = strip_tags($_POST['telp']);
                            $ualamat = strip_tags($_POST['alamat']);
                            $role = strip_tags($_POST['role']);
                            
                            $uname = $koneksi->real_escape_string($uname);
                            $email = $koneksi->real_escape_string($email);
                            $upass = $koneksi->real_escape_string($upass);
                            $utelp = $koneksi->real_escape_string($utelp);
                            $ualamat = $koneksi->real_escape_string($ualamat);
                            $role = $koneksi->real_escape_string($role);
                            
                    
                            // $hashed_password = md5($upass);
                            // $hashed_password = password_hash($upass, PASSWORD_DEFAULT);
                            
                            $check_username = $koneksi->query("SELECT username FROM users WHERE username='$uname'");
                            $count_username = $check_username->num_rows;
                    
                            $check_email = $koneksi->query("SELECT email FROM users WHERE email='$email'");
                            $count_email = $check_email->num_rows;
                    
                            if($count_email == 0){
                                $query = "INSERT INTO users(username, password, email, telepon, alamat, role ) VALUES ('$uname', '$upass', '$email',  '$utelp', '$ualamat', '$role')";
                    
                                if($koneksi->query($query)){
                                    echo "<div class='alert alert-success'>
                                    <button type='button' class='close' data-dismiss='alert'>x</button>
                                    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Terima kasih Anda berhasil terdaftar. Silahkan Login !
                                   </div>";
                                   //direct to login page
                                   header("Refresh: 1; url=index.php?page=masuk");
                                }
                            } else {
                                echo "<div class='alert alert-danger'>
                                <button type='button' class='close' data-dismiss='alert'>x</button>
                                 <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Maaf email Anda sudah terdaftar !
                                </div>";
                             }

                             if(!$count_username == 0){
                                echo "<div class='alert alert-danger'>
                                <button type='button' class='close' data-dismiss='alert'>x</button>
                                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Maaf username Anda sudah terdaftar !
                               </div>";
                             }

                        }
                    ?>     
               
                    <form role="form" name="signup-form" id="signup-form" action="" method="post">
                        <div class="form-group">
                            <label class="required">Nama Pengguna</label>
                            <input type="text" class="form-control" name="username" id="user_form" placeholder="Masukkan nama pengguna">
                        </div>
                        <div class="form-group">
                            <label class="required">Email</label>
                            <input type="email" class="form-control" name="email" id="email_form" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <label class="required">Kata Sandi</label>
                            <input type="password" class="form-control" name="password"  id="pass_form" placeholder="Masukkan kata sandi">
                        </div>
                        <div class="form-group">
                            <label class="required">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" name="confirm_password" id="repass_form" placeholder="Masukkan ulang kata sandi">
                        </div>
                        <div class="form-group">
                            <label class="required">No.Telepon</label>
                            <input type="text" class="form-control" name="telp" id="no_form" max-length="12" placeholder="Masukkan no.telepon">
                        </div>
                        <div class="form-group">
                            <label class="required">Alamat</label>
                            <textarea type="text" class="form-control" name="alamat" id="alamat_form" placeholder="Masukkan alamat"></textarea>
                        </div>
                        <input type="hidden" value="user" name="role">
                        <div class="item-align" align="center">
                            <button class="btn btn-default" type="submit" value="Daftar" id="btn_signup" name="btn-signup">DAFTAR</button>
                        </div>
                    </form>
                    <p class="text-center" id="information">
                        <caption>Sudah punya akun? <a href="index.php?page=masuk" id="login-link">Masuk</a></caption>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end content-->
</div>