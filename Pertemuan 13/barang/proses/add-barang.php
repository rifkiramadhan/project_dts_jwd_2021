<?php 
    require_once('../config/db.php');
    $koneksi = connect();

    // Mengeluarkan data dari POST
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $namaSuplier = $_POST['nama-suplier'];

    $value = "INSERT INTO barang (id, kategori, nama, harga, stok, namaSuplier) VALUES 
    (NULL, '$kategori', '$nama', '$harga', '$stok', '$namaSuplier')";

    $query = mysqli_query($koneksi, $value);

    if ($query) {
        header("Location: ../");
    } else {    
        header("Location: ../tambah-barang.php");
    }
?>