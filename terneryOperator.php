<?php 

    //masalah seperti pengkondisian ini bisa kita ringkas dengan menggunakan ternery operator
    //contoh kasusnya :
    $gender = "pria";
    $hi = null;

    if ($gender = "pria") {
        $hi = "hai bro";
    }else {
        $hi = "hai nona";
    }

    echo $hi . PHP_EOL;

    //ringkasannya menggunakan ternery operator
    $agama = "islam";
    $salam = $agama == "islam" ? "assalamualaikum" : "salam kebajikan";

    echo $salam . PHP_EOL;
?>