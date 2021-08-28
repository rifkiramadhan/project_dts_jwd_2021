<?php 
    // Mengambil koneksi data dari database config
    require_once('./config/db.php');

    $koneksi = connect();
    $query = mysqli_query($koneksi, "SELECT * FROM barang");

    // Membuat function untuk rupiah
    function rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.'); return $hasil_rupiah;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- My Icon -->
    <link rel="shortcut icon" href="img/icon.png">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/admin.css">

    <!-- My Swalert -->
    <link rel="stylesheet" href="dist/sweetalert2.min.css"> 
    <script src="swalert/sweetalert2.min.js"></script>
    <script src="swalert/sweetalert2.all.min.js"></script>

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Data Barang</title>
  </head>
  <body>

  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="img/icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Data Barang
        </a>

        <div class="icon mp-2 text-white">
            <h5>
                <i class="bi bi-basket-fill m-3" data-bs-toggle="tooltip"
                title="Keranjang Belanja"></i>
                <i class="bi bi-messenger m-3" data-bs-toggle="tooltip"
                title="Surat Masuk"></i> 
                <i class="bi bi-bell-fill m-3" data-bs-toggle="tooltip"
                title="Notifikasi"></i>
                <i class="bi bi-box-arrow-right m-3" data-bs-toggle="tooltip"
                title="Keluar"></i>
             </h5>
        </div>
    </div>
  </nav>

  <div class="row no-gutters">
          <div class="col-md-2 bg-dark pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                  <a class="nav-link active text-white" href="features/dashboard.php"><i class="bi bi-house-door-fill"></i> Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="index.php"><i class="bi bi-box-seam"></i> Daftar Barang</a><hr class="bg-secondary">
                </li>
              </ul>
          </div>

          <div class="col-md-10 p-5 pt-2 mt-3">
            <h3><i class="bi bi-box-seam"></i> DAFTAR BARANG</h3><hr>
            <a class="btn btn-primary mb-3" href="./tambah-barang.php"><i class="bi bi-bookmark-plus"></i> Tambah Barang</a>
            <div class="table-responsive-sm">
                <table class="table table-dark table-hover" border="1">
                    <thead>
                        <tr>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Nama Suplier</th>
                            <th scope="col">Aksi Ubah</th>
                            <th scope="col">Aksi Hapus</th>
                        </tr>
                    </thead>
        
                    <?php 
                    while ($data = mysqli_fetch_array($query)) {
                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td>".$data['nama']."</td>";
                        echo "<td>".$data['kategori']."</td>";
                        echo "<td>".rupiah($data['harga'])."</td>";
                        echo "<td>".$data['stok']."</td>";
                        echo "<td>".$data['namaSuplier']."</td>";
                        echo '<td><a class="btn btn-warning" href="update-barang.php?id='.$data['id'].'"><i class="bi bi-bookmark-dash-fill"></i> Ubah</a></td>';
                        echo '<td><a class="btn btn-danger" href="#" onclick="confirmDeleteBarang('.$data['id'].')"><i class="bi bi-bookmark-x-fill"></i> Hapus</a></td>';
                        echo "</tr>";
                        echo "</tbody>";
                    }
                    ?>
                </table>
            </div>
          </div>
      </div>

  <div class="container">
    </div>
    <footer class="bg-dark text-white p-5">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active bg-secondary">LAYANAN PELANGGAN</li>
                    <li class="list-group-item">Pusat Bantuan</li>
                    <li class="list-group-item">Cara Pembelian</li>
                    <li class="list-group-item">Pengiriman</li>
                    <li class="list-group-item">Cara Pengembalian</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-group">
                <li class="list-group-item active bg-secondary">TENTANG KAMI</li>
                <li class="list-group-item">
                <p>
                        Belanja Online atau biasa dikenal dengan Toko online atau 
                        Online Shop merupakan tempat pembelian barang dan jasa melalui 
                        media Internet. Belanja Online atau Toko online adalah salah 
                        satu bentuk perdagangan elektronik (Ecommerce) digunakan untuk 
                        kegiatan transaksi penjual ke penjual ataupun penjual ke konsumen.
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
        <p>Rifki Ramadhan Copyright &copy 2021</p>
    </div>

    <!-- My JS -->
    <script src="js/script.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" 
    crossorigin="anonymous"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>