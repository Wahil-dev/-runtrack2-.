<?php
    $str = "Dans l'espace, personne ne vous entend crier";

    // méthode 1
    $i = 0;
    for($i; isset($str[$i]); $i++) {}
    echo "$i<br>";

    // méthode 2
    $i = 0;
    while(isset($str[$i])) {
        $i++;
    } echo $i;
?>