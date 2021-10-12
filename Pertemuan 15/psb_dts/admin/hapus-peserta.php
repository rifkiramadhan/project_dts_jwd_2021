<?php

    // Mengkaitkan file koneksi.php untuk menghubungkan database MySQL
    include '../config/koneksi.php';

    // Jika datanya berhasil dihapus dari tbl_pendaftaran yang dicari dari id_pendaftaran
    if (isset($_GET['id'])) {
        $delete = mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran = '".($_GET['id'])."' ");

        // Maka akan dialihkan ke halaman semula sebelum dihapus dan akan menghapus barang tersebut
        header("Location: data-peserta.php");
    exit;
    }
?>