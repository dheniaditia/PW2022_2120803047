<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array</title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            background-color: #bada55;
            text-alight: center;
            line-height: 40px;
            margin: 3px;
            float: left;
            transition: 1.5s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%
        }
    </style>
</head>
<body>
    <?php 
    $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    ?>
    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
    <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</body>
</html>