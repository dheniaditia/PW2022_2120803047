<?php 

session_start();

if( !isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}

require 'functions.php';


if ( isset($_POST["submit"]) ) {


if( tambah($_POST) > 0 ) {
  echo "
  <script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'admin.php';
  </script>  
  ";
} else {
  echo "
  <script>
    alert('data gagal ditambahkan!');
    document.location.href = 'admin.php';
  </script>  
  ";
}
  
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Tambah data Hp</h1>

  <font size="+2" color="navy" face="Calibri">
  <center>
  <form action="" method="post" enctype="multipart/form-data">

      <br>
        <label for="produk">Produk : </label>
        <input type="text" name="produk" id="produk" required>
      </br>
      <br>
        <label for="harga">Harga : </label>
        <input type="text" name="harga" id="harga" required>
      </br>
      <br>
      <label for="spesifikasi">Spesifikasi : </label>
        <input type="text" name="spesifikasi" id="spesifikasi" required>
      </br>
      <br>
      <label for="rilis">Rilis : </label>
        <input type="text" name="rilis" id="rilis" required>
      </br>
      <br>
      <label for="gambar">Gambar : </label>
        <input type="file" name="gambar" id="gambar" required>
      </br>
      <br>
        <button type="submit" name="submit">Tambah Data!</button>
      </br>

  </form>
  </center>
</body>
</html>