<?php 
    // Mengambil koneksi data dari database config
    require_once('../config/db.php');

    $koneksi = connect();
    $query = mysqli_query($koneksi, "SELECT * FROM barang");

    // Membuat function untuk rupiah
    function rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.'); return $hasil_rupiah;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>
 
    <!-- My Icon -->
    <link rel="shortcut icon" href="../img/icon.png">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/admin.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    
<div class="col-md">
          <div class="col-md-12 p-5 pt-2 mt-3">
            <h3 class="text-center"><i class="bi bi-box-seam"></i> LAPORAN DAFTAR BARANG</h3><hr>
            <div class="table-responsive">
                <table id="example" class="table table-secondary table-striped" border="1" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Nama Suplier</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        <?php 
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>".$data['nama']."</td>";
                            echo "<td>".$data['kategori']."</td>";
                            echo "<td>".rupiah($data['harga'])."</td>";
                            echo "<td>".$data['stok']."</td>";
                            echo "<td>".$data['namaSuplier']."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
          </div>
      </div>

    <!-- My Print JS -->
    <script src="../js/print.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>