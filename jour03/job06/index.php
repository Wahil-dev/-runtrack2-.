<?php
    $str = "Les choses que l'on possede finissent par nous posseder";
    $i = 0;
    while(isset($str[$i])) {
        $i++;
    }
    $i--;
    for($i; isset($str[$i]); $i--) {
        echo $str[$i];
    }
?>