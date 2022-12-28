<?php 

session_start();

if( isset($_COOKIE['login'])) {
    if( $_COOKIE['login'] == 'true') {
        $_SESSION['login'] = true;
    }
}

require 'functions.php';
$user = query("SELECT * FROM admin");


if ( isset($_POST["cari"]) ) {
  $user = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Halaman User</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<a href="logout.php">Logout</a>
  
<h1>Daftar Hp Xiaomi</h1>

<br><br>

<form action="" method="post">

<input type="text" name="keyword" size="40" autofocus
placehorder="silahkan masukkan teks...." autocomplate="off">
<button type="submit" name="cari">Cari</button>

</form>

<br>
<table border="1" cellpadding="10" cellspacing="0">

<tr>
  <th>No.</th>
  <th>Aksi</th>
  <th>Gambar</th>
  <th>Harga</th>
  <th>Produk</th>
  <th>Spesifikasi</th>
  <th>Rilis</th>
</tr>

<?php $i = 1; ?>
<?php foreach( $user as $row) : ?>
<tr>
  <td><?= $i; ?></td>
  <td>
    <a href="detail.php?id=<?= $row["id"]; ?>">detail</a>
  </td>
  <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
  <td><?= $row["harga"]; ?></td>
  <td><?= $row["produk"]; ?></td>
  <td><?= $row["spesifikasi"]; ?></td>
  <td><?= $row["rilis"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</body>
</html>