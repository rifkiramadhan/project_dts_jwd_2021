<?php 
    // Mengkaitkan file koneksi.php untuk menghubungkan database MySQL
    include '../../config/koneksi.php';

    // Membuat session start agar sessionnya berjalan
    session_start();    

    // Jika session status login tidak sama dengan true / tidak benar
    if ($_SESSION['stat_login'] != true) {

        // Maka akan dialihkan ke halaman login kembali
        header("Location: ../login.php");
    exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Peserta</title>

    <!-- My Icon -->
    <link rel="shortcut icon"  href="../../img/kominfo.png" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="../../img/dts-kominfo.png" alt="" width="100px" class="d-inline-block align-text-top">
            </a>
            <form class="d-flex">
                <img src="../../img/dts-vsga.png" alt="" width="100px" class="d-inline-block align-text-top">
            </form>
        </div>
    </nav>
    
            <h2 class="text-center">Laporan Calon Peserta</h2>
            <table class="table table-borderless table-striped table-light mt-5 mb-5" border="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pendaftaran</th>
                        <th>Tahun Ajaran</th>
                        <th>Jurusan</th>
                        <th>Nama Lengkap</th>
                        <th>Nilai Ijazah</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                <?php

                    // Mendeklarasikan variable untuk menginputkan kedalam table data
                    $no = 1;
                    $list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");

                    // Membuat perulangan while untuk menginputkan table data dan menampilkannya dalam satu list data
                    while ($row = mysqli_fetch_array($list_peserta)) {
                        
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['id_pendaftaran']?></td>
                        <td><?php echo $row['th_ajaran']?></td>
                        <td><?php echo $row['jurusan']?></td>
                        <td><?php echo $row['nm_peserta']?></td>
                        <td><?php echo $row['nilai']?></td>
                        <td><?php echo $row['tmp_lahir'].', '.$row['tgl_lahir'] ?></td>
                        <td><?php echo $row['jk']?></td>
                        <td><?php echo $row['agama']?></td>
                        <td><?php echo $row['almt_peserta']?></td>
                        <td><span class="badge rounded-pill bg-success">Diterima</span></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

    <!-- My JS -->
    <script src="../../js/cetak-bukti.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../../js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

</body>
</html>