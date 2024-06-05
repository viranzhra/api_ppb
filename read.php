<?php

// Set header CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Origin, Content-Type, Accept");

$koneksi = new mysqli('localhost', 'root', '', 'db_produk');
$query = mysqli_query($koneksi, "select * from tbl_produk");
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
echo json_encode($data);