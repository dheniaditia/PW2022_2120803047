<?php 

$mahasiswa = [
    ["Dheni", "2120803047", "Sistem Informasi", "dheniaditia3@gmail.com"];
    ["Zaky", "2120803048", "Teknik Informatika", "lofy@gmail.com"]
    ["Audi", "2120803052", "Kimia", "Audi@gmail.com"]
    ["Gusti", "2120803053", "Biologi", "Gus@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li><?php $mhs[0]; ?></li>
        <li><?php $mhs[1]; ?></li>
        <li><?php $mhs[2]; ?></li>
        <li><?php $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>