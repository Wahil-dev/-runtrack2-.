<?php
    $max = 1337;

    for($i=0; $i<$max+1; $i++) {
        if($i == 42) {
            echo "<br><b><u>$i</u></b>";
            continue;
        };
        echo "<br>$i";
    }
?>