<?php 

    // Mendeklarasikan variable koneksi untuk database MySQL
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'db_psb'; 

    // Membuat variable $conn untuk membuat koneksi database MySQL melalui variable $host, $user, $pass, $db
    $conn = mysqli_connect($host, $user, $pass, $db);

    // Jika databasenya tidak terkoneksi maka tampilkan error dari koneksi database MySQL
    if (!$conn) {
       echo 'Error : '.mysqli_connect_error($conn); 
    }
?>