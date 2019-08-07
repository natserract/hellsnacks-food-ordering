<?php
    //Redirect ke halaman login jika pelanggan belum login
    if(!isset($_SESSION['user_username'])){
        header("Location: index.php?page=masuk");
    }

    $sess = $_SESSION['user_username'];
    $sql = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$sess'");
    $obj = mysqli_fetch_array($sql);
       

    if(isset($_POST['simpan'])){
       $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$sess'");
       
       $uemail = strip_tags($_POST['email']);
       $utelp = strip_tags($_POST['telp']);
       $ualamat = strip_tags($_POST['alamat']);
       $upass = strip_tags($_POST['password']);

       $uemail = $koneksi->real_escape_string($uemail);
       $utelp = $koneksi->real_escape_string( $utelp);
       $ualamat = $koneksi->real_escape_string($ualamat);
       $upass = $koneksi->real_escape_string($upass);


        // $upass = password_hash($upass, PASSWORD_DEFAULT);

       $sql2 = "UPDATE users SET email = '$uemail', telepon = '$utelp', alamat = '$ualamat', password = '$upass' WHERE username = '$sess'";
       mysqli_query($koneksi, $sql2) or die(mysqli_error($koneksi));

        if($koneksi->query($sql2)){
           $msg = "<script>alert('Terima Kasih! Akun Anda berhasil di Update.'); window.location = 'index.php?page=pengaturan-akun';</script>";
        }
    }
?>

    <title>Pengaturan Akun <?php echo $title; ?></title>
    <link rel="stylesheet" href="./assets/css/akun.css">
    <script type="text/javascript" src="./assets/js/akun.js"></script>

    <!-- Breadcrumber (Riwayat Halaman)-->
    <section class="id-breacrumber">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="./" id="link-color"><i class="fa fa-home"></i></a></li>
                    <li><a id="link-underline">Pengaturan Akun </a></li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumber -->

    <section class="account-set-sec">
        <div class="container">
            <div class="row">
                <div class="page-title text-center" style="color:#000">
                    <div class="itemalign" align="center">
                        <h2 class="text-uppercase"><strong>Akun Saya</strong></h2>
                    </div>
                </div>
                <div class="form-edit-ac">
                <?php 
                        if(isset($msg)){
                            echo $msg;
                        }
                    ?>
                    <form role="form" name="edit-account-form" id="edit_account_form" action="" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email_form" value="<?php echo $obj['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label>No.Telepon</label>
                            <input type="text" class="form-control" name="telp" id="no_form" max-length="12" value="<?php echo $obj['telepon']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" class="form-control" name="alamat" id="alamat_form" ><?php echo $obj['alamat']; ?></textarea>
                        </div>
                        <legend>Ganti Kata Sandi</legend>
                        <div class="form-group">
                            <label>Kata sandi</label>
                            <input type="password" class="form-control" name="password" value="<?php echo $obj['password'] ?>" id="pass_form">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="type" value="user">
                        </div>
                        <div class="item-align" align="center">
                            <button class="btn" type="submit" value="Simpan" id="btn_signup" name="simpan">SIMPAN</button>
                        </div>
                    </form>
                     
                </div>
            </div>
        </div>
    </section>