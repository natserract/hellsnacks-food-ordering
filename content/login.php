
<?php 
    error_reporting(FALSE);
    if(isset($_SESSION['user_username'])){
        header("Location: index.php?page=beranda");
    }
    
    if(isset($_POST['btn-login'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $uname = strip_tags($_POST['username']);
            $upass = strip_tags($_POST['password']);
            $role = 'user';

           
            $uname = $koneksi->real_escape_string($uname);
            $upass = $koneksi->real_escape_string($upass);

            
            $query = $koneksi->query("SELECT username, password, role FROM users WHERE username = '$uname' AND password = '$upass' AND role = '$role'");
            $result = mysqli_query($query);
            $numrows = mysqli_num_rows($query);
            if($numrows !=0){
                while($row = mysqli_fetch_assoc($query))
                {
                    $dbusername = $row['username'];
                    $dbpassword = $row['password'];
                }
                if($uname == $dbusername && $upass == $dbpassword){
                    // session_start();
                    $_SESSION['user_username'] = $uname;
                    header("Refresh: 0, url=index.php?page=beranda");
                    echo "<style>
                    body{
                        cursor: wait;
                    }
                    </style>";
                }
            } else {
                $msg =  "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Username dan password Anda salah !
               </div>";
            }
        } else {
            echo "Require all fields";
        }

    }
  
?>

<title>Masuk <?php echo $title; ?></title>
<link rel="stylesheet" href="assets/css/login.css" />
<script type="text/javascript" src="assets/js/login.js"></script>


<div class="login login-action">
       <!-- Breadcrumber (Riwayat Halaman)-->
        <section class="id-breacrumber">
            <div class="container">
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="./" id="link-color"><i class="fa fa-home"></i></a></li>
                        <li><a id="link-underline">Masuk</a></li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumber -->

    <!-- Form Login -->
    <section class="id-form-login">
        <div class="container" id="login">
            <div class="row">
            <?php 
                if(isset($_SESSION['user_username'])){
                    ?>
                    <p>&nbsp;</p>
                        <h4 style="color: #000" class="text-center">Terima kasih  Anda berhasil <strong>login</strong>! Anda akan diredirect ke halaman utama...</h4>
                    <p>&nbsp;</p>
                    <?php 
                }else {
            ?>
                <div class="log-form">
                
                    <?php 
                        if(isset($msg)){
                            echo $msg;
                        }
                    ?>
                    <label>Selamat datang. Masuk.</label>
                    <form role="form" name="loginform" id="loginform"  method="post" action="">
                        <div class="form-group">
                            <input type="text" name="username"  class="form-control" id="user_login" placeholder="Nama pengguna">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="user_pass" placeholder="Kata sandi">
                        </div>
                        <label class="container-label text-uppercase">
                            Ingat Kata Sandi Saya
                            <input type="checkbox" id="remember">
                            <span class="checkmark"></span>
                        </label>
                        <div class="item-align" align="center">
                            <button type="submit" class="btn btn-default btn-log" name="btn-login" id="btn-log" >MASUK</button>
                        </div>
                    </form>
                    <p class="text-center" id="information">
                        <caption>Anda belum punya akun? <a href="index.php?page=daftar" id="signUp-link">Daftar</a></caption>
                    </p>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Form Login -->
</div>

    <script>
        $(document).ready(function(){
            $('.alert').fadeTo(3000, 500).slideUp(500);
        });
    </script>
