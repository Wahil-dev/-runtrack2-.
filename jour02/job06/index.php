<?php
    $largeur = 50;
    $hauteur = 10;

    for($i=0; $i<$largeur*2; $i++) {
        if ($i == $largeur) {
            for($j=1; $j<=$hauteur; $j++) {
                echo "<br><span style='color:blue'>|</span>";
                for($l=1; $l<$largeur*2; $l++) {
                    if($l == $largeur*2-1) {
                        echo "<span style='color:red'>|</span>";
                        continue;
                    } else {
                        echo "<span>&nbsp</span>";
                    }
                }
            }
            echo "<br><span>*</span>";
            continue;
        }
        echo '<span>*</span>';
    }
?>

<?php
    echo "<br>";
    $largeur = 10;
    $hauteur = 10;

    for($i=1; $i<=$largeur; $i++) {
        if($i==$largeur) {
            echo '<span>_</span><br>';
            continue;
        }
        echo '<span>_</span>';
    }
    
    for($j=1; $j<=$hauteur; $j++) {
        for($l=1; $l<=$largeur; $l++) {
            if($l==$largeur) {
                echo "*<br>";
                continue;
            }
            echo "*";
        }
    }

    for($i=1; $i<=$largeur; $i++) {
        if($i==$largeur) {
            echo '<span>_</span><br>';
            continue;
        }
        echo '<span>_</span>';
    }
?>
