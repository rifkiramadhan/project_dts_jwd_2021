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

    // Menyeleksi data peserta yang telah didapatkan dari tb_pendaftaran
    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
    
    // Kemudian menyimpannya dalam bentuk object mysqli_fetch_object
    $p = mysqli_fetch_object($peserta);

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
    <section class="mt-5 mb-5 pt-5">

        <h2 class="text-center">Detail Peserta</h2>
        <div class="container table-responsive">
                <table class="table table-borderless table-striped table-light" border="0">
                <tr>
                    <td>Kode Pendaftaran</td>
                    <td>:</td>
                    <!-- Mencetak id pendaftaran -->
                    <td><?php echo $p -> id_pendaftaran ?></td>
                </tr>

                <tr>
                    <td>Tahun Ajaran</td>
                    <td>:</td>
                    <!-- Mencetak tahun ajaran -->
                    <td><?php echo $p -> th_ajaran ?></td>
                </tr>

                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <!-- Mencetak jurusan -->
                    <td><?php echo $p -> jurusan ?></td>
                </tr>

                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <!-- Mencetak nama lengkap -->
                    <td><?php echo $p -> nm_peserta ?></td>
                </tr>

                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <!-- Mencetak tempat, tanggal lahir -->
                    <td><?php echo $p -> tmp_lahir.', '.$p -> tgl_lahir ?></td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <!-- Mencetak Jenis Kelamin -->
                    <td><?php echo $p -> jk ?></td>
                </tr>

                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <!-- Mencetak agama -->
                    <td><?php echo $p -> agama ?></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <!-- Mencetak Alamat -->
                    <td><?php echo $p -> almt_peserta ?></td>
                </tr>
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>