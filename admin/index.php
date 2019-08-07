<!--  Hellsnacks Modified 
      Author : Hellsnacks Company.
      2017
-->
<?php
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['username'],$_SESSION['password']) ){
	  header('location:login.php');
	}else{

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hellsnacks Dashboard | Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css"> 
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/dataTables.min.css"> 
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script src="assets/js/ckeditor/ckeditor.js"></script>
    <script src="assets/js/jquery.min.js"></script>
  
    
    <!-- <script src="assets/js/jquery.validate.js"></script> -->
  </head>
  <body>
    <div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="./" class="navbar-brand">
                  <div class="brand-text brand-big hidden-lg-down"><span>HellSnacks </span><strong> Dashboard</strong></div>
                  <div class="brand-text brand-small"><strong>HD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Logout    -->
                <li class="nav-item"><a href="logout.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="assets/img/admin-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Amalia Indriani</h1>
              <p>Administrator</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
          <ul class="list-unstyled">
            <li class="before"> <a href="?page=dashboard"><i class="fa fa-tachometer"></i> Dashboard</a></li>
            <li class="after"> <a href="?page=dashboard" data-toggle="tooltip" data-placement="right" title="Dashboard"><i class="fa fa-tachometer"></i></a></li>

            <li class="before"><a href="?page=user" aria-expanded="false"><i class="fa fa-user-circle"></i> Pengguna </a></li>
            <li class="after"> <a href="?page=user" data-toggle="tooltip" data-placement="right" title="Pengguna"><i class="fa fa-user-circle"></i></a></li>

            <li class="before"> <a href="?page=product"><i class="fa fa-shopping-cart"></i> Produk </a></li>
            <li class="after"> <a href="?page=product" data-toggle="tooltip" data-placement="right" title="Produk"><i class="fa fa-shopping-cart"></i></a></li>

            <li class="before"> <a href="?page=category"><i class="fa fa-sitemap"></i> Kategori </a></li>
            <li class="after"> <a href="?page=category" data-toggle="tooltip" data-placement="right" title="Kategori"><i class="fa fa-sitemap"></i></a></li>

            <li class="before"> <a href="?page=order"><i class="fa fa-shopping-bag"></i> Order </a></li>
            <li class="after"> <a href="?page=order" data-toggle="tooltip" data-placement="right" title="Order"><i class="fa fa-shopping-bag"></i></a></li>

            <li class="before"> <a href="?page=service"><i class="fa fa-wrench"></i> Servis Pengguna </a></li>
            <li class="after"> <a href="?page=service" data-toggle="tooltip" data-placement="right" title="Servis Pengguna"><i class="fa fa-wrench"></i></a></li>

            <li class="before"> <a href="../" target="_blank"><i class="fa fa-share-square-o"></i> Kunjungi Halaman</a></li>
            <li class="after"> <a href="../" data-toggle="tooltip" data-placement="right" title="Kunjungi Halaman" target="_blank"><i class="fa fa-share-square-o"></i></a></li>
          </ul>
        </nav>
       
        <div class="content-inner">
          <!-- Content -->
            <?php include("content/content.php"); ?>
          <!-- Content End Here -->
         
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>HellSnacks &copy; 2017 Allright reserved.</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Powered by <strong>HellSnacks Team</strong>.</p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        
      </div>
    </div>
    <!-- Javascript files-->

  
    <script type="text/javascript" src="assets/js/dataTables.min.js"></script>
    <script src="assets/js/tether.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.cookie.js"> </script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/charts-home.js"></script>
    <script src="assets/js/front.js"></script>
  </body>
</html>
  
<?php
}
?>