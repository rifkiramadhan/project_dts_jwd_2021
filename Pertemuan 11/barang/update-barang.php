<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php 
        require_once('./config/db.php');

        $koneksi = connect();
        $id = $_GET['id'];

        if(!$id){
            header("Location: ./");
        }

        $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id'");
        $data = mysqli_fetch_array($query);
    ?>
    <h1>Update Barang</h1>
    <br>
    <form action="./proses/edit-barang.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id']; ?>" required>
        <label for="input">Nama Barang : </label>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br>
        <label for="kategori">Kategori : </label>
        <input type="text" name="kategori" value="<?= $data['kategori']; ?>" required><br>
        <label for="harga">Harga : </label>
        <input type="number" name="harga" value="<?= $data['harga']; ?>" required><br>
        <label for="stok">Stok : </label>
        <input type="number" name="stok" value="<?= $data['stok']; ?>" required><br>
        <label for="suplier">Nama Suplier : </label>
        <input type="text" name="nama-suplier" value="<?= $data['namaSuplier']; ?>" required><br>
        <div class="card-button">
            <a href="./index.php">Kembali</a><input class="button" type="submit" value="Simpan">
        </div>
    </form>
</body>
</html>