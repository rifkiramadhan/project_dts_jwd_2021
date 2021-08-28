<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- My Icon -->
    <link rel="shortcut icon" href="img/icon.png">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Tambah Barang</title>
  </head>
  <body>

  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="img/icon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Tambah Barang
        </a>
    </div>
  </nav>

  <div class="container mt-3 mb-4">
      <form class="form-inline" action="./proses/add-barang.php" method="post">
          <label for="nama" class="form-label">Nama Barang : </label>
          <input type="text" class="form-control" name="nama" required><br>
          <label for="kategori" class="form-label">Kategori : </label>
          <input type="text"  class="form-control" name="kategori" required><br>
          <label for="harga" class="form-label">Harga : </label>
          <input type="number" class="form-control" name="harga" required><br>
          <label for="stok" class="form-label">Stok : </label>
          <input type="number" class="form-control" name="stok" required><br>
          <label for="suplier" class="form-label">Nama Suplier : </label>
          <select name="nama-suplier" class="form-select mb-4" aria-label="Default select example">
            <option disabled selected>-- Pilih Suplier -- </option>
              <option value="Nikko">Nikko</option>
              <option value="Butterfly">Butterfly</option>
              <option value="Kenko">Kenko</option>
          </select>
          <div class="d-flex gap-2">
              <a class="btn btn-secondary" href="./index.php"><i class="bi bi-backspace-fill"></i> Kembali</a>
              <input class="btn btn-success" type="submit" value="Tambah">
          </div>
       </form>
  </div>

  <div class="text-center p-4 text-white bg-dark">
        <p>© Rifki Ramadhan:</p>
        <p>Tugas Pertemuan 14</p>
  </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" 
    crossorigin="anonymous"></script>
  </body>
</html>