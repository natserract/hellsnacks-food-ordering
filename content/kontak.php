<?php 
    error_reporting(FALSE);
?>

<?php
    
    if(isset($_POST['simpan'])){
        $name= strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $telepon = strip_tags($_POST['telepon']);
        $pesan = strip_tags($_POST['pesan']);

        $name = $koneksi->real_escape_string($name);
        $email = $koneksi->real_escape_string($email);
        $telepon = $koneksi->real_escape_string($telepon);
        $pesan = $koneksi->real_escape_string($pesan);

        $query = "INSERT INTO kontak (nama_lengkap, email, no_telp, pesan) VALUES('$name', '$email', '$telepon', '$pesan')";

        if($koneksi->query($query)){
            $msg = "<div class='alert alert-success success-alert'>
                <button type='button' class='close' data-dismiss='alert'>x</button>
                <strong>Terima Kasih! </strong> Pesan Anda telah diterima, kami akan segera merespon Anda.
            </div>";
        } else {
            $msg = "
            <div class='alert alert-danger danger-alert'>
            <button type='button' class='close' data-dismiss='alert'>x</button>
                <strong>Mohon Maaf! </strong> Pesan Anda belum bisa diterima, terjadi kesalahan.
            </div>";
        }
        
    }
    
?>

<title>Kontak Kami <?php echo $title; ?></title>
<link rel="stylesheet" href="assets/css/kontak.css" />
<script type="text/javascript" src="assets/js/kontak.js"></script>

<!-- Breadcrumber (Riwayat Halaman)-->
<section class="id-breacrumber">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="./" id="link-color"><i class="fa fa-home"></i></a></li>
                <li><a id="link-underline">Kontak</a></li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumber -->

<section class="article-contact" style="color: #000">
    <div class="container">
        <div class="head_page_title" align="center">
            <h2 class="text-uppercase"><strong>Kontak Kami</strong></h2>
        </div>
        <div class="contact_detail_article">
            <div class="row">
                <div class="col-md-8">

                <div class="grid-title">
                            <h3 class="text-uppercase"><b>Kontak Form</b></h3>
                        </div>
                      
                    <p>&nbsp;</p>
                    
                    <form name="contact_form" id="contact_form" method="POST" action="">
                    <?php 
                        if(isset($msg)){
                            echo $msg;
                        }
                    ?>
                        <div class="form-group">
                            <label class="required">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                        </div>

                        <div class="form-group">
                            <label class="required">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="johndoe@gmail.com">
                        </div>

                        <div class="form-group">
                            <label class="no-required">Telepon</label>
                            <input type="text" name="telepon" class="form-control" id="telepon" placeholder="No.Telepon">
                        </div>

                        <div class="form-group">
                            <label class="required">Pesan</label>
                            <textarea id="pesan" class="form-control" placeholder="Pesan" name="pesan"></textarea>
                        </div>
                        <button type="submit" name="simpan" class="btn btn-default" id="button_submit">Kirim</button>
                    </form>
                </div>

                <p class="visible-xs">&nbsp;</p>
                <div class="col-md-4">
                    <div class="grid-title">
                        <h3 class="text-uppercase"><b>Hellsnacks Info</b></h3>
                    </div>
                  

                    <p>&nbsp;</p>
                    <p class="text-justify">Jika Anda memiliki pertanyaan, komentar atau saran, kami akan senang mendengarnya dari Anda. Hubungi kami setiap saat dan kami akan menghubungi Anda dalam waktu 24 jam.</p>
                    <div class="list-information">
                        <ul style="padding:8px 0px; list-style: none;">
                            <li class="li-contact"><span class="iconText"><i class="fa fa-map-marker"></i></span> Jl. Perumnas No.10 Denpasar, Bali.
                            </li><br>
                            <li class="li-contact"><span class="iconText"><i class="fa fa-phone"></i></span> 0818-63-6161 / 022-424-6161</li><br>
                            <li class="li-contact"><span class="iconText"><i class="fa fa-envelope-o"></i></span><a href="javascript:void(0)" id="infoMail"> hellsnacks@gmail.com</a></li><br>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script For Alert -->
<script>
    $('.alert').fadeTo(3000, 500).slideUp(500);
    $('.alert').fadeTo(3000, 500).slideUp(500);
</script>
<!-- Script End Here -->

