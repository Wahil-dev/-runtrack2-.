<?php 
    $hauteur = 15;
    $largeur = $hauteur;
    
    for($i=1; $i<=$hauteur; $i++) {
        for($j=1; $j<=$largeur; $j++) {
            if($j==$largeur) {
                echo "/";
                $largeur--;
                $separe = ($hauteur - $largeur)*2;
                if($separe>0) {
                    for($s= 1; $s <= $separe; $s++) {
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
                } 
                continue;
            }
            echo "<span>&nbsp</span>";
        }
    }
?>


