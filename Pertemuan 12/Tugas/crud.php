<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- My CSS -->
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/responsive.css">

  <title>Todo App</title>
</head>
<body>
<?php
ini_set("error_reporting", 0);
session_start();
if(isset($_POST['submit'])){
  $data = array();

  $data['nama_pelanggan'] = $_POST['nama_pelanggan'];
  $data['nohp_pelanggan'] = $_POST['nohp_pelanggan'];
  $data['alamat_pelanggan'] = $_POST['alamat_pelanggan'];

  if($_SESSION['data_pelanggan']){
    $data_pelanggan = $_SESSION['data_pelanggan'];
    array_push($data_pelanggan,$data);
    $_SESSION['data_pelanggan'] = $data_pelanggan;
  }else{
    $_SESSION['data_pelanggan'][] = $data;
  }

  header("location: ./crud.php");

}

if($_SESSION['data_pelanggan']){ ?>

<h1>Todo App</h1>
  <a href='?act=add'>Tambah [+]</a><br>
  <div class="container">
    <table border="1">
      <thead>
        <tr>
          <th>Nomor</th>
          <th>Nama Pelanggan</th>
          <th>No HP</th>
          <th>Alamat</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
    <?php $no=0; foreach ($_SESSION['data_pelanggan'] as $key => $value) { $no++; ?>
      <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $value['nama_pelanggan'];?></td>
        <td><?php echo $value['nohp_pelanggan'];?></td>
        <td><?php echo $value['alamat_pelanggan'];?></td>
        <td><button class="button" type="button" onclick="window.location='crud.php?act=delete&id=<?php echo $key;?>'">Hapus</button></td>
        <td><button class="button" type="button" onclick="window.location='crud.php?act=edit&id=<?php echo $key;?>'">Edit</button></td>
      </tr>
    <?php } ?>
    </table>
  </div>

<?php }else{
  echo "<h1>Yuk isi datamu!</h1>";
  echo "<a href='?act=add'>Tambah [+]</a>";
}

switch($_GET['act']){

  case "add":
    $form = "<p><form class='.form-inline' action='' method='post'>";
    $form .= "Nama Pelanggan: <input type='text' name='nama_pelanggan'><br>";
    $form .= "No HP Pelanggan: <input type='text' name='nohp_pelanggan'><br>";
    $form .= "Alamat Pelanggan: <input type='text' name='alamat_pelanggan'><br>";
    $form .= "<input class='button' type='submit' name='submit'></form><br>";
    echo $form;
    break;

  case "delete":
    $id = $_GET['id'];
    unset($_SESSION['data_pelanggan'][$id]);
    header("location: ./crud.php");
    break;

  case "update":
    $id = $_GET['id'];
    $_SESSION['data_pelanggan'][$id]['nama_pelanggan'] = $_POST['nama_pelanggan'];
    $_SESSION['data_pelanggan'][$id]['nohp_pelanggan'] = $_POST['nohp_pelanggan'];
    $_SESSION['data_pelanggan'][$id]['alamat_pelanggan'] = $_POST['alamat_pelanggan'];
    header("location: ./crud.php");
    break;

  case "edit":
    $id = $_GET['id'];
    $data_pelanggan = $_SESSION['data_pelanggan'][$id];
    $form = "<p><form class='.form-inline' action='?act=update&id={$id}' method='post'>";
    $form .= "Nama Pelanggan: <input type='text' name='nama_pelanggan' value='{$data_pelanggan["nama_pelanggan"]}'><br>";
    $form .= "No HP Pelanggan: <input type='text' name='nohp_pelanggan' value='{$data_pelanggan["nohp_pelanggan"]}'><br>";
    $form .= "Alamat Pelanggan: <input type='text' name='alamat_pelanggan' value='{$data_pelanggan["alamat_pelanggan"]}'><br>";
    $form .= "<input class='button' type='submit' name='update'></form><br>";
    echo $form;
    break;

  case "default":
  break;
}
?>
</body>
</html>