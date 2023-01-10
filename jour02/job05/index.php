<?php
    $max = 1000;
    $nombre_de_diviseur = 0;
    for($i=1; $i<=$max; $i++) {
        for($j=1; $j<=$max; $j++) {
            if($i%$j==0) {
                $nombre_de_diviseur++;
            }
        }
        if ($nombre_de_diviseur <= 2 && $nombre_de_diviseur > 1) {
            echo "<br>$i";
        };
        $nombre_de_diviseur = 0;
    }
?>