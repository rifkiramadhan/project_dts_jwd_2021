<?php 
    // Mengkaitkan file koneksi.php untuk menghubungkan database MySQL
    include 'koneksi.php';

    // Jika tombol submit ditekan
    if (isset($_POST['submit'])) {

        // Mengambil 1 id terbesar di kolom id_pendaftaran, lalu mengambil 5 buah karakter yang terhitung dari sebelah kanan ke kiri
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");

        // Kemudian menyimpannya dalam bentuk object mysqli_fetch_object
        $d = mysqli_fetch_object($getMaxId);
        $generateID = 'p'.date('Y').sprintf("%5s", $d->id + 1);
        // echo $generateID;

        // Membuat proses insert
        $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
            '".$generateID."',
            '".date('Y-m-d')."',
            '".$_POST['th_ajaran']."',
            '".$_POST['jurusan']."',
            '".$_POST['nm']."',
            '".$_POST['tmp_lahir']."',
            '".$_POST['tgl_lahir']."',
            '".$_POST['jk']."',
            '".$_POST['agama']."',
            '".$_POST['alamat']."'
        )");

        // Jika berhasil menginsert data siswa maka akan masuk kedalam file halaman berhasil.php dan menampilkan generate id yang dibuat
        if ($insert) {
            echo '<script>window.location="berhasil.php?id='.$generateID.'"</script>';

        // Jika gagal menginsert data siswa maka tampilkan kata huft, dan tampilkan errornya kenapa
        } else {
            echo 'Huft '.mysqli_error($conn);
        }

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


    <nav class="navbar navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="img/icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Digitalent Online
            </a>
            <form action="" class="d-flex gap-2">
                <a class="btn btn-primary bi bi-window" href="index.php"> Halaman Utama</a>
                <a class="btn btn-warning bi bi-arrow-right-circle" href="login.php"> Login Admin</a>
            </form>
        </div>
    </nav>
    
    <!-- Bagian box formulir -->
    <section class="pt-5 mt-5 mb-5">
        <h2 class="text-center">Formulir Pendaftaran Peserta</h2>

        <!-- Bagian form -->
        <form action="" method="post">
            <div class="container">
                <table border="0" class="table table-borderless table-responsive">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="form-control" value="2020/2021" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select name="jurusan" id="" class="form-control">
                                <option value="">--Pilih--</option>
                                <option value="VSGA">VSGA</option>
                                <option value="FGA">FGA</option>
                                <option value="PROA">PROA</option>
                                <option value="DEA">DEA</option>
                                <option value="TA">TA</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <h3 class="text-center">Data Diri Calon Peserta</h3>
            <div class="container table-responsive">
                <table border="0" class="table table-borderless">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm" class="form-control" required>
                        </td>
                    </tr>

                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="form-control" required>
                        </td>
                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="form-control" required>
                        </td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" value="Laki-laki">
                                <label class="form-check-label">
                                    Laki-laki
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                                <label class="form-check-label">
                                    Perempuan
                                </label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select id="" class="form-control" name="agama">
                                <option value="">--Pilih--</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khatolik">Katholik</option>
                                <option value="Khonghucu">Khonghucu</option>

                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                            <textarea class="form-control" name="alamat" id="" cols="30" rows="10" required></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" name="submit" class="btn btn-primary" value="Daftar Sekarang"><i class="bi bi-arrow-right-circle"></i> Daftar Sekarang</button>
                            <button type="reset" class="btn btn-danger" value="Ulangi"><i class="bi bi-layout-text-sidebar"></i> Ulangi</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
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