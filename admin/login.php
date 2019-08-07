<!--  Hellsnacks Modified 
      Author : Hellsnacks Company.
      2017
-->

<?php
  include 'config/config.php';
  session_start();
  // if(isset($_SESSION['user_username'])){
  //   header("Location: index.php?page=beranda");
  // }

  if(isset($_SESSION['username'],$_SESSION['password'])){ // pake( , ) bukan AND/and
    header("location:../");
  }else{
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login &#8211; HellSnacks | Jual Cemilan Pedas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/font-awesome.css"> 
    <!-- <script src="https://use.fontawesome.com/99347ac47f.js"></script> -->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder">
          <div class="row">
            <div class="col-md-4 offset-md-4 bg-black animated shake">
            <div class="itemalign" align="center">
              <div class="form d-flex align-items-center">
                <div class="content">
                <h1 style="font-size: 45px; padding-bottom: 10px;"><span class="fa fa-user-circle"></span></h1>
                <h1>Hellsnacks Admin Login</h1>
                <br>
                  <form id="login-form" method="post" action="config/cek_login.php">
                    <div class="animated fadeIn">
                      <div class="form-group">
                        <input id="username" type="text" name="username" required="" class="input-material">
                        <label for="username" class="label-material">Username</label>
                      </div>
                      <div class="form-group">
                        <input id="password" type="password" name="password" required="" class="input-material">
                        <label for="password" class="label-material">Password</label>
                      </div>
                      <label class="container-label text-uppercase">
                       Remember My Password
                      <input type="checkbox" id="remember">
                      <span class="checkmark"></span>
                    </label>
                    </div>
                    <div class="form-group">
                      <button id="login" type="submit" name="btn-login" class="btn btn-primary">Login</button>
                      <button id="reset" type="reset" name="btn-reset" class="btn btn-primary">Reset</button>
                  </div>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>
                </div>
              </div>
          </div>
          </div>
        </div>
        <p>&nbsp;</p>
        <div class="a-backto text-center">
         <a href="../" class="back-to"><i class="fa fa-long-arrow-left"></i> Kembali ke Hellsnacks</a>
      </div>
        </div>
    </div>
   <!-- Javascript files-->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/tether.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/jquery.cookie.js"> </script>
   <script src="assets/js/jquery.validate.min.js"></script>
   <script src="assets/js/charts-home.js"></script>
   <script src="assets/js/front.js"></script>
 </body>
</html>

<?php
}
?>