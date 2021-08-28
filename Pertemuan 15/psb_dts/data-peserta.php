<?php 
    // Membuat session start agar sessionnya berjalan
    session_start();

    // Mengkaitkan file koneksi.php untuk menghubungkan database MySQL
    include 'koneksi.php';

    // Jika session status login tidak sama dengan true / tidak benar
    if ($_SESSION['stat_login'] != true) {

        // Maka akan dialihkan ke halaman login kembali
        echo '<script>window.location="login.php"</script>';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitalent Online</title>

    <!-- My Icon -->
    <link rel="shotcut icon" href="img/icon.png">

    <!-- My JQuery CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">

    <!-- My Bootstrap Data Tables CSS -->
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">

    <!-- My Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <!-- My Swalert -->
    <link rel="stylesheet" href="swalert/sweetalert2.min.css"> 
    <script src="swalert/sweetalert2.min.js"></script>
    <script src="swalert/sweetalert2.all.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    
    <!-- Bagian navbar -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="img/icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Digitalent Online
            </a>
            <form class="d-flex">
                    <a class="nav-link text-white" aria-current="page" href="beranda.php"><i class="bi bi-window"></i> Beranda</a>
                    <a class="nav-link text-white" href="data-peserta.php"><i class="bi bi-bar-chart-fill"></i> Data Peserta</a>
                    <a class="nav-link text-white" href="keluar.php"><i class="bi bi-arrow-90deg-right"></i> Keluar</a>
            </form>
        </div>
    </nav>
    
    <!-- Bagian content -->
    <section class="mt-5 mb-5 pt-5">
        <h2 class="text-center">Data Peserta</h2>

        <div class="container table-responsive">
            <a href="cetak-peserta.php" target="_blank" class="btn btn-primary mb-2"><i class="bi bi-printer-fill"></i> Print</a>
            <table id="example" class="table table-borderless table-dark table-striped table-hover" border="1">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>ID Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
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
                        <td><?php echo $row['jk']?></td>
                        <td class="d-flex gap-2">
                            <a class="btn btn-warning" href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>"><i class="bi bi-bookmark-check-fill"></i> Detail</a>
                            <a class="btn btn-danger" href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>" onclick="return Swal.fire('Data berhasil di hapus', '', 'success'); "><i class="bi bi-bookmark-x-fill"></i> Hapus</a>
                        </td>
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

    <!-- My JQuery -->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <!-- My Data Tables -->
    <script src="js/data-tables.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>