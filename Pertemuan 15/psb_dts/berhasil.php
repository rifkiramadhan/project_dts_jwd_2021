<?php 
    // Mengkaitkan file koneksi.php untuk menghubungkan database MySQL
    include 'koneksi.php';
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
    
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="img/icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Digitalent Online
            </a>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="card-body d-flex align-items-center">
            <div class="col-md-5">
                <img src="img/img1.svg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="container">
                <h5 class="card-title">Terima Kasih telah mendaftar</h5>
                <p class="card-text">Kehadiran Anda sangat berarti untuk meningkatkan Visi & Misi kami dalam membangun pelatihan ini agar lebih baik lagi.</p>
            </div>
        </div>
    </div>

        <!-- Bagian box formulir -->
        <section class="container card text-center mt-5 mb-5">
            <div class="card-header">
                <h2>Pendaftaran Berhasil</h2>
            </div>

            <!-- Jika pendaftaran siswa berhasil maka kode pendaftaran siswa akan diambil / dipanggil dari data id -->
            <div class="card-body">
                <h4 class="card-title">Kode Pendaftaran Anda adalah: <p class="card-text"><?php echo $_GET['id'] ?></p></h4>

                <!-- Mencetak bukti pendaftaran dari id pendaftaran yang dipanggil dan membukanya pada tab browser baru serta bisa di save ke PDF -->
                <a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn btn-success mt-3"><i class="bi bi-printer-fill"></i> Cetak Bukti Daftar</a>
                <a href="keluar.php" class="btn btn-secondary mt-3"><i class="bi bi-box-arrow-left"></i> Kembali</a>
            </div>
        </section>

    <div class="container">
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