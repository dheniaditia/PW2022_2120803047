<?php 

session_start();

if( !isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}

require 'functions.php';


$id = $_GET["id"];


$mi = query("SELECT * FROM admin WHERE id = $id")[0];

if ( isset($_POST["submit"]) ) {


if( ubah($_POST) > 0 ) {
  echo "
  <script>
    alert('data berhasil diubah!');
    document.location.href = 'admin.php';
  </script>  
  ";
} else {
  echo "
  <script>
    alert('data gagal diubah!');
    document.location.href = 'admin.php';
  </script>  
  ";
}
  
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Ubah data Hp</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Ubah data Hp</h1>

  <font size="+2" color="navy" face="Calibri">
  <center>

  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mi["id"]; ?>">

      <br>
        <label for="produk">Produk : </label>
        <input type="text" name="produk" id="produk" required
        value="<?= $mi["produk"]; ?>">
      </br>
      <br>
        <label for="harga">Harga : </label>
        <input type="text" name="harga" id="harga" required
        value="<?= $mi["harga"]; ?>">
      </br>
      <br>
      <label for="spesifikasi">Spesifikasi : </label>
        <input type="text" name="spesifikasi" id="spesifikasi" required
        value="<?= $mi["spesifikasi"]; ?>">
      </br>
      <br>
      <label for="rilis">Rilis : </label>
        <input type="text" name="rilis" id="rilis" required
        value="<?= $mi["rilis"]; ?>">
      </br>
      <br>
      <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar" required
        value="<?= $mi["gambar"]; ?>">
      </br>
      <br>
        <button type="submit" name="submit">Ubah Data!</button>
      </br>

  </form>
  </center>
</body>
</html