<?php 

    $name = ["lutvi", "dono", "indro", "somad"];

    //perulangan data array menggunakan for biasa
    for ($i=0; $i < count($name) ; $i++) { 
        echo "hello, $name[$i]" . PHP_EOL;
    }

    //perulangan data array menggunakan foreach
    
    $buah = ["semangka", "jambu", "pisang", "melon"];

    foreach ($buah as $bu) {
        echo "aku makan buah $bu" . PHP_EOL;
    }

?>