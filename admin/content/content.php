
<!-- Pengaturan Halaman -->

<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        }else $page = 'dashboard';

    if($page == "dashboard") include ("dashboard.php");
    else if($page == "user") include ("user.php");
	else if($page == "product") include ("product.php");
	else if($page == "category") include ("category.php");
    else if($page == "service") include ("service.php");
    else if($page == "login") include ("login.php");
    else if($page == "order") include ("order.php");
     else if($page == "edit-produk") include ("edit-produk.php");
   

    else {
        echo "<h2 class='text-center' style='color: #000'>Kontent Tidak Ada</h2>";
        echo "<h2 class='text-center' style='color: #000'>404</h2>";
    }
   
    
?>