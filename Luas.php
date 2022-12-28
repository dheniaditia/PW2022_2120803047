<?php 

    function luas_persegi_panjang() {
        $panjang = 10;
        $lebar = 6.5;


        $luas = $panjang * $lebar;
        return $luas;
    }

    echo "</br>";
    echo "Diketahui : Panjang = 10 cm, Lebar = 6.5 cm";
    echo "</br>";
    echo "</br>";
    echo "Ditanya : Hitunglah luas persegi panjang?";
    echo "</br>";
    echo "</br>";
    echo "Rumus : P * L";
    echo "</br>";
    echo "</br>";
    echo "Jawab.";
    echo "</br>";
    echo "</br>";
    echo "10 cm * 6.5 cm = " . luas_persegi_panjang() . " cm";

?>