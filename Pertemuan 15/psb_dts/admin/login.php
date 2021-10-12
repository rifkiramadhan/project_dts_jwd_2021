<?php 
    // Mengkaitkan file koneksi.php untuk menghubungkan database MySQL
    include '../config/koneksi.php';

    // Membuat session start agar sessionnya berjalan
    session_start();

    if (isset($_SESSION["stat_login"]) ) {
        header("Location: beranda.php");
    exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitalent Online</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- My Icon -->
    <link rel="shortcut icon"  href="../img/kominfo.png" />

    <!-- My Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- My Swalert -->
    <link rel="../stylesheet" href="swalert/sweetalert2.min.css"> 
    <script src="../swalert/sweetalert2.min.js"></script>
    <script src="../swalert/sweetalert2.all.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>

    <?php 
    // Ketika tombol input dari name login ditekan
    if (isset($_POST['login'])) {
        // Mengecek akun admin tersedia atau tidak dan mencari username dari tb_admin yang telah di inputkan kedalam text box user dan password
        // Menggunakan htmlspecialchars untuk mencegah user yang jahil
        $cek = mysqli_query($conn, "SELECT * FROM  tb_admin WHERE username = '".htmlspecialchars($_POST['user'])."' AND password = '".MD5(htmlspecialchars($_POST['pass']))."' ");

        // Jika akunnya tersedia maka akan masuk kedalam file halaman beranda.php
        if (mysqli_num_rows($cek) > 0) {

            // Menyimpan data admin yang masuk kedalam object mysqli_fetch_object
            $a = mysqli_fetch_object($cek);
            
            // Membuat session ketika login berhasil
            $_SESSION['stat_login'] = true;
            $_SESSION['id'] = $a -> id_admin;
            $_SESSION['nama'] = $a -> nm_admin;

            echo '<script>window.location="beranda.php"</script>';

        // Jika akunnya tidak tersedia maka akan mencetak Login Gagal
        } else {
            echo '<script>Swal.fire("Login Gagal", "Username atau password Anda salah", "error")</script>';
        }
    }
    ?>

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
    
    <!-- Bagian main login -->
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Login Admin</h5>
                        <form method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="user" id="floatingInput" placeholder="ex: rifkiromdons" autocomplete="off" required>
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="pass" id="floatingPassword" placeholder="Password" autocomplete="off" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-success btn-login text-uppercase fw-bold " name="login" value="Login" type="submit"><i class="bi bi-arrow-right-circle"></i> Masuk</button>
                                <a class="btn btn-register" href="../user/register.php"><i class="bi bi-layout-text-sidebar"></i> Daftar Peserta</a>
                            </div>
                        </form>
                    </div>
                </div>
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
    <script src="../js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="../js/bootstrap.min.js"></script> -->
</body>
</html>