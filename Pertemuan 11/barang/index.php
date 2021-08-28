<?php 
    // Mengambil koneksi data dari database config
    require_once('./config/db.php');

    $koneksi = connect();
    $query = mysqli_query($koneksi, "SELECT * FROM barang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- My JavaScriot -->
    <script src="./js/confirm.js"></script>
</head>
<body>
    <h1>Data Barang</h1>
    <a href="./tambah-barang.php">Tambah Barang</a>

    <div class="container">
        <table border="1">
            <thead>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Nama Suplier</th>
                <th>Aksi Ubah</th>
                <th>Aksi Hapus</th>
            </thead>

            <?php 
            while ($data = mysqli_fetch_array($query)) {
                echo "<tbody>";
                echo "<tr>";
                echo "<td>".$data['nama']."</td>";
                echo "<td>".$data['kategori']."</td>";
                echo "<td>".$data['harga']."</td>";
                echo "<td>".$data['stok']."</td>";
                echo "<td>".$data['namaSuplier']."</td>";
                echo '<td><a href="update-barang.php?id='.$data['id'].'">Ubah</a></td>';
                echo '<td><a href="#" onclick="confirmDeleteBarang('.$data['id'].')">Hapus</a></td>';
                echo "</tr>";
                echo "</tbody>";
            }
            ?>
        </table>
    </div>
    
    <footer>
            <p>&copy Rifki Ramadhan</p>
            <p>Tugas Pertemuan Ke - 11</p>
    </footer>
</body>
</html>