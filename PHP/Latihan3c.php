<?php 

function pangkat ($angka, $pangkat) {
    $total = $angka;
    for($i=0;$i<($pangkat-1);$i++){
        $total = $total * $angka;
    }
    return $total;
}
echo pangkat(5,4);
?>