<?php
    for($i=1; $i<=1000; $i++) {
        $nombre_de_diviseur = 0;
        for($j=1; $j<=$i; $j++) {
            if($i%$j==0) {
                $nombre_de_diviseur++;
            }
        }
        if ($nombre_de_diviseur == 2) {
            echo "<br>$i";
        };
    }
?>