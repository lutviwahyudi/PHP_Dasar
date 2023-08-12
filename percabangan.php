<?php 
    $nilai = 70;
    $absen = 90;

    if ($nilai >= 75 && $absen >= 90) {
        echo "anda lulus" . PHP_EOL;
    }else {
        echo "anda gak lulus" . PHP_EOL;
    }

    if ($nilai >= 75 && $absen >= 90) :
        echo "anda lulus" . PHP_EOL;
    else :
        echo "anda gak lulus";
    endif;
?>