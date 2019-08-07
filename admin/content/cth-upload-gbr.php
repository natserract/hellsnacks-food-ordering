// Form Html Nya
<form action ="upload_file.php" metode="post" enctype="multipart/form-data">
<label for="file"> Filename: </label>
<input type="file" name="gambar" id="gambar" />
<br />
<input type="submit" name="upload" value="Submit" />
</form>
//

<?php 
if(isset($_POST['upload'])) {
    date_default_timezone_set('Asia/Jakarta');
    $name        = $_POST['gambar'];
    $time        = time();
    $nama_gambar = $_FILES['gambar'] ['name']; // Nama Gambar
    $size        = $_FILES['gambar'] ['size'];// Size Gambar
    $error       = $_FILES['gambar'] ['error'];
    $tipe_video  = $_FILES['gambar'] ['type']; //tipe gambar untuk filter
    $folder      = "uploads/"; //folder tujuan upload
    $valid       = array('jpg','png','gif','jpeg'); //Format File yang di ijinkan Masuk ke server
    
    if(strlen($nama_gambar))

       {   

         // Perintah untuk mengecek format gambar

         list($txt, $ext) = explode(".", $nama_gambar);

         if(in_array($ext,$valid))

         {   

           // Perintah untuk mengecek size file gambar

           if($size<500000)

           {   

             // Perintah untuk mengupload gambar dan memberi nama baru

             $gambarnya = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
             $gmbr  = $folder.$gambarnya;
             
             $tmp = $_FILES['gambar']['tmp_name'];

             if(move_uploaded_file($tmp, $folder.$gambarnya))

             {   
              $mysqli->query("INSERT INTO gallery_gambar(Nama_Gambar`, `DESC_GAMBAR`, `gambar`) VALUES ('$name', '$desc', '$gmbr') ");
              echo '<script>
                  alert("gambar Berhasil di upload");
               </script>';

             }
                else{ // Jika Gambar Gagal Di upload 
            echo '<script>
                  alert("gambar Gagal di upload");
               </script>';
            }
            
           }
           else{ // Jika Gambar melebihi size 
           echo '<script>
                  alert("gambar Terlalu Besar, Max 5MB");
               </script>';  
             }         

         }

         else{ // Jika File Gambar Yang di Upload tidak sesuai eksistensi yang sudah di tetapkan
            echo '<script>
                  alert("Format Gambar Tidak valid , Format Gambar Harus (JPG, Jpeg, gif, png) ");
               </script>';  
             }

       }         

       else{ // Jika Gambar belum di pilih 
        echo '<script>
                  alert("Gambar Belum Di Pilih , Harap Memilih Gambar Dahulu");
               </script>'; 
          }       

       exit;

     }
?>