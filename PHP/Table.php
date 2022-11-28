<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modul 2 - Latihan 1</title>
  <style>
    .ganjil {
      background-color: red;
    }
    .genap{
      background-color: white;
    }
    <?php $ganjil=1 . $genap=2 ?>
      <?php 
        if($i % 2 == 1)
        {
          echo $ganjil ;
        }else{
          echo $genap ;
        }
        ?>
  </style>
</head>
<body>
  <table border="1" cellpadding="3" cellspacing="0">
    <tr style='background-color:yellow;'>
      <th>Kolom 1</th>
      <th>Kolom 2</th>
      <th>Kolom 3</th>
      <th>Kolom 4</th>
      <th>Kolom 5</th>
    </tr>

    <?php 
    for ($i = 1; $i <= 15; $i++){
      echo "<tr>";
      for($j = 1; $j <= 5; $j++){
          echo "<td style='background-color:red;'> Baris $i Kolom ".$j."</td>";
        } 
      }
     ?>

  </table>
</body>
</html>