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

    <!-- My Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

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
    <div class="container mt-5 mb-5 pt-5">
        <div class="card-body d-flex align-items-center">
            <div class="col-md-3">
                <img src="img/img3.svg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="container">
                <h5 class="card-title">Halo <?php echo $_SESSION['nama'] ?>, Selamat Datang di beranda Admin</h5>
                <p class="card-text">Selamat beraktifitas, sekarang kamu dapat melihat halaman data peserta hingga mencetak data peserta yang telah terdaftar.</p>
                <p>
                    Bila ada kendala silahkan kontak Pengembang
                </p>
                <a class="btn btn-secondary" target="_blank" href="https://api.whatsapp.com/send?phone=6282122116992&text=Permisi%20Kak%20Saya%20butuh%20bantuan%20nih%20...">
                <i class="bi bi-whatsapp"></i> Pengembang</a>
            </div>
        </div>

        <div class="card-body d-flex align-items-center">
            <div class="container">
                <h5 class="text-end">Hai <?php echo $_SESSION['nama'] ?>, Jangan lupa pakai masker</h5>
                <p class="text-end">Karena jumlah kasus Covid-19 di Indonesia masih meningkat, untuk keselamatan dan kenyamanan dalam bekerja jangan lupa tetap pakai masker dan taati peraturan Prokes yang ada.</p>
            </div>
            <div class="col-md-3">
                <img src="img/img2.svg" class="img-fluid rounded-start" alt="...">
            </div>
        </div>
    </div>
    
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>