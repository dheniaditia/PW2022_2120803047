<?php 

$id = $_GET['id'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project_uas';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$bk = "SELECT * FROM admin Where id = '$id'";

$hasil = $conn->query($bk);

$row = $hasil->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Detail</title>
    <link rel="stylesheet" href="style.css">

    <style>
        label {
            display: block;
        }
        p {
            font-size :25px;
        }
    </style>
</head>
<body>
        <h1>Produk</h1>
        <font size="+2" color="navy" face="Calibri">
        <nav>
            <a href="user.php">Back</a>
        </nav>

    <center>
    <article>
    
        <p>Detail Spesifikasi</p>
       
        <div>
            <img src="img/<?= $row['gambar']; ?>" alt="" width="350">
        </div>

    </article>
    </center>
</body>
</html>