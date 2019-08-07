  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">Dashboard</h2>
    </div>
  </header>

<?php
  include './config/config.php';
  $role= "user";
  $query_users = mysqli_query($koneksi, "SELECT * FROM users WHERE role='$role' ");
  $query_produk = mysqli_query($koneksi, "SELECT * FROM produk");
  $query_kategori = mysqli_query($koneksi, "SELECT * FROM kategori");

  $jumlah_user = mysqli_num_rows($query_users);
  $jumlah_produk = mysqli_num_rows($query_produk);
  $jumlah_kategori = mysqli_num_rows($query_kategori);
?>
 <!-- Dashboard Counts Section-->
 <section class="dashboard-counts no-padding-bottom">
 <div class="container-fluid">
   <div class="row bg-white has-shadow">
     <!-- Item -->
     <div class="col-xl-4 col-sm-6">
       <div class="item d-flex align-items-center">
         <div class="icon bg-violet"><i class="icon-user"></i></div>
         <div class="title"><span>Jumlah<br>Pengguna</span>
           <div class="progress">
             <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
           </div>
         </div>
         <div class="number"><strong><?php echo $jumlah_user ?></strong></div>
       </div>
     </div>
     <!-- Item -->
     <div class="col-xl-4 col-sm-6">
       <div class="item d-flex align-items-center">
         <div class="icon bg-red"><i class="icon-padnote"></i></div>
         <div class="title"><span>Jumlah<br>Produk</span>
           <div class="progress">
             <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
           </div>
         </div>
         <div class="number"><strong><?php echo $jumlah_produk ?></strong></div>
       </div>
     </div>
     <!-- Item -->
     <div class="col-xl-4 col-sm-6">
       <div class="item d-flex align-items-center">
         <div class="icon bg-green"><i class="icon-bill"></i></div>
         <div class="title"><span>Jumlah<br>Kategori</span>
           <div class="progress">
             <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
           </div>
         </div>
         <div class="number"><strong><?php echo $jumlah_kategori ?></strong></div>
       </div>
     </div>
   </div>
 </div>
</section>