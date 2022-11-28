<?php 

$negara = [
    "Indonesia" => "Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala lumpur",
    "Brunei" => "Bandar seri begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manilla",
    "Myanmar" => "Naypyidaw"
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Daftar Negara ASEAN</h1>
    <?php foreach ($negara as $ngr => $kota) : ?>
        <li><?php echo "$ngr : $kota" ?></li>
    <?php endforeach; ?>
    
</body>
</html>