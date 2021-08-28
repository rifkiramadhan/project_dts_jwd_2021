<?php 
    require_once('../config/db.php');

    $koneksi = connect();
    $id = $_GET['id'];

    if(!$id){
        header("Location: ../");
    }

    $query = mysqli_query($koneksi, "DELETE FROM `barang` WHERE id='$id'");
    if ($query) {
        header("Location: ../");
    } else {    
        header("Location: ../");
    }
?>