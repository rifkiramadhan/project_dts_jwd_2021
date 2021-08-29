<?php 
    // Mengkaitkan file koneksi.php untuk menghubungkan database MySQL
    include 'koneksi.php';

    // Membuat variable $peserta untuk mennyeleksi tbl_pendaftaran dari id_pendaftaran
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
    <title>Cetak Bukti</title>

    <!-- My Icon -->
    <link rel="shortcut icon"  href="img/kominfo.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="img/dts-kominfo.png" alt="" width="100px" class="d-inline-block align-text-top">
            </a>
            <form class="d-flex">
                <img src="img/dts-vsga.png" alt="" width="100px" class="d-inline-block align-text-top">
            </form>
        </div>
    </nav>

    <div class="container">
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
    
    <h2 class="text-center mt-3">Bukti Pendaftaran</h2>
    <table class="table table-borderless table-striped mb-5 table-light" border="0">
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

    <!-- My JS -->
    <script src="js/cetak-bukti.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>