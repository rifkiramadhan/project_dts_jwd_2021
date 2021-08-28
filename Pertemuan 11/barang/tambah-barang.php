<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Tambah Barang</h1>
    <br>
    <form class="form-inline" action="./proses/add-barang.php" method="post">
        <label for="nama">Nama Barang : </label>
        <input type="text" name="nama" required><br>
        <label for="kategori">Kategori : </label>
        <input type="text" name="kategori" required><br>
        <label for="harga">Harga : </label>
        <input type="number" name="harga" required><br>
        <label for="stok">Stok : </label>
        <input type="number" name="stok" required><br>
        <label for="suplier">Nama Suplier : </label>
        <input type="text" name="nama-suplier" required><br>
        <div class="card-button">
            <a href="./index.php">Kembali</a><input class="button" type="submit" value="Tambah">
        </div>
    </form>
</body>
</html>