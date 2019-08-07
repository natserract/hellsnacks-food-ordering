<?php
header('Content-Type: application/json');
if(!isset($_POST['id'])) {
    echo json_encode(array('status' => 'error','pesan' => 'Error'));
} else {
	include '../config/config.php';
    $id_produk = $_POST['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id_produk'");
    $data = mysqli_fetch_array($query);
    if(mysqli_num_rows($query) == 0) {
        echo json_encode(array('status' => 'error','pesan' => 'ID Tidak Ditemukan'));
    } else {
        echo json_encode(array('status' => 'success',
        'edit_nama_produk' => $data['produk_nama'],
        'edit_harga_produk' => $data['produk_harga'],
        'edit_ket_produk' => $data['short_desc'],
        'edit_desc_produk' => $data['long_desc'],));
    }
}
?>