<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_produk');

$id_produk = $_POST['id_produk'];
$data = mysqli_query($koneksi, "delete from tbl_produk where id_produk='$id_produk'");
if ($data) {
    echo json_encode([
        'pesan'=>'Sukses Delete'
    ]);
} else{
    echo json_decode([
        'pesan'=>'Gagal Delete'
    ]);
}