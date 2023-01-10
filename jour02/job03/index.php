<?php
    $max = 100;
    for($i=0;$i<=$max; $i++) {
        if($i == 42) {
            echo "<br>La_Plateforme";
            continue;
        } else if(0 < $i && $i < 20) {
            echo "<br><i>$i</i>";
            continue;
        }else if($i > 25 && $i < 50 && $i != 41) {
            echo "<br><u>$i</u>";
            continue;
        }

        echo "<br>$i";
    }
?>