<?php 
    // Mengkaitkan file koneksi.php untuk menghubungkan database MySQL
    include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitalent Online</title>

    <!-- My Icon -->
    <link rel="shortcut icon"  href="../img/kominfo.png" />
    
    <!-- My Jquery Data Tables CSS -->
    <!-- <link rel="stylesheet" href="../css/jquery.dataTables.min.css"> -->

    <!-- My Data Tables Bootstrap CSS -->
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" >

    
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../img/icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Digitalent Online
            </a>            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-primary bi bi-window" href="../index.php"> Halaman Utama</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Bagian content -->
    <section class="mt-5 mb-5 pt-5">
        <h2 class="text-center pt-5">Daftar Peserta</h2>
        <div class="container table-responsive">
            <table id="example" class="table table-borderless table-dark table-striped table-hover" border="1">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>ID Pendaftaran</th>
                        <th>Nama</th>
                        <th>Nilai Ijazah</th>
                        <th>Jurusan</th>
                        <th>Jenis Kelamin</th>
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
                            <td class="text-center"><?php echo $no++ ?></td>
                            <td><?php echo $row['id_pendaftaran']?></td>
                            <td><?php echo $row['nm_peserta']?></td>
                            <td><?php echo $row['nilai']?></td>
                            <td><?php echo $row['jurusan']?></td>
                            <td><?php echo $row['jk']?></td>
                            <td><?php echo $row['almt_peserta']?></td>
                            <td><span class="badge rounded-pill bg-success">Diterima</span></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>

    <footer class="bg-dark text-white p-5">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active bg-secondary">LAYANAN APLIKASI</li>
                    <li class="list-group-item">Pusat Pendaftaran</li>
                    <li class="list-group-item">Cara Pendaftaran</li>
                    <li class="list-group-item">Informasi</li>
                    <li class="list-group-item">Alumni</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-group">
                <li class="list-group-item active bg-secondary">TENTANG APLIKASI</li>
                <li class="list-group-item">
                <p>
                    Sistem pembelajaran elektronik atau e-pembelajaran dapat didefinisikan sebagai sebuah bentuk teknologi 
                    informasi yang diterapkan di bidang pendidikan berupa situs web yang dapat diakses di mana saja. E-learning 
                    merupakan dasar dan konsekuensi logis dari perkembangan teknologi informasi dan komunikasi.
                </p>              
                </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-group">
                <li class="list-group-item active bg-secondary">Mitra Kerja Sama</li>
                    <li class="list-group-item">GOJEK</li>
                    <li class="list-group-item">GRAB</li>
                    <li class="list-group-item">JNE</li>
                    <li class="list-group-item">PT. POS Indonesia</li>
                    <li class="list-group-item">TIKI</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active bg-secondary">Hubungi Kami</li>
                    <li class="list-group-item">021-791-86894</li>
                    <li class="list-group-item">rrxportal07@gmail.com</li>
                </ul>
            </div>
    
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </div>
    </footer>

    <div class="copyright text-center text-white font-weight-bold bg-dark p-2">
        <p>Rifki Ramadhan Copyright &copy; 2021</p>
    </div>

    <!-- My JQuery Data Tables JS -->
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>

    <!-- My Data Tables Bootstrap JS -->
    <script src="../js/dataTables.bootstrap5.min.js"></script>

    <!-- My Data Tables -->
    <script src="../js/data-tables.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="../js/bootstrap.min.js"></script> -->
    
</body>
</html>