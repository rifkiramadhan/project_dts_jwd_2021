<?php 
    require_once('../config/db.php');

    $koneksi = connect();

    // Mengeluarkan data dari POST
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $namaSuplier = $_POST['nama-suplier'];

    $value = "UPDATE barang SET kategori = '$kategori', nama = '$nama', harga = '$harga', stok = '$stok', namaSuplier = '$namaSuplier' 
              WHERE id ='$id'";

    $query = mysqli_query($koneksi, $value);

    if ($query) {
        header("Location: ../");
    } else {    
        header("Location: ../");
    }
?>