<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
     <div class="container-fluid">
       <h2 class="no-margin-bottom">Kontak</h2>
     </div>
  </header>
</div>
<?php
error_reporting(false);
$query=mysqli_query($koneksi, "SELECT * FROM kontak ORDER BY id_kontak DESC");
?>
<section>

  <div class="table-responsive"> 
                <table class="table"> 
                    <thead> 
                        <tr> 
                          <th>Nama Lengkap</th>
                          <th>Email</th>
                          <th>No. Telepon</th>
                          <th>Pesan</th>
                          <th>Aksi</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                    <?php
                      while ($row=mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                          <td><?php echo $row['nama_lengkap']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['no_telp']; ?></td>
                          <td><?php echo $row['pesan']; ?></td>
                          <td>
                            <a href="content/hapus_service.php?id_kontak=<?php echo $row['id_kontak'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda ingin menghapus data ini?')">
                              <i class="fa fa-close"></i> Hapus
                            </a>
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