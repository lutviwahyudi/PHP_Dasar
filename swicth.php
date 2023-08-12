<?php 

    //kondisi if statement
    $nilai = "A";

    if ($nilai == "A") {
        echo "anda lulus dengan cumlaude" . PHP_EOL;
    }elseif ($nilai == "B") {
        echo "anda lulus dengan pujian";
    }elseif ($nilai == "C"){
        echo "anda kurang belajar";
    }else {
        echo "anda terlalu bodoh";
    }

    //kondisi switch statement
    switch ($nilai) {
        case 'A':
            echo "anda pintar";
            break;

        case 'B':
            echo "anda lumaya";
            break;
        
        case 'C':
            echo "anda kurang belajar";
            break;
        
        default:
            echo "anda bodoh";
            break;
    }
?>