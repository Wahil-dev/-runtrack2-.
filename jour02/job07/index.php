<?php 
    $hauteur = 25;
    $largeur = $hauteur;
    for($i=1; $i<=$hauteur; $i++) {
        for($j=1; $j<=$largeur; $j++) {
            if($j==$largeur) {
                echo "/";
                $separe = ($hauteur - $largeur)*2;
                $largeur--;
                if($separe>0) {
                    for($s= 0; $s <= $separe; $s++) {
                        if($s == $separe) {
                            echo "\<br>";
                            continue;
                        }
                        if($i==$hauteur) {
                            echo "<span>.</span>";
                            continue;
                        }
                        echo "<span>&nbsp</span>";
                    }
                } else {
                    echo "\<br>";
                }
                continue;
            }
            echo "<span>&nbsp</span>";
        }
    }
?>


