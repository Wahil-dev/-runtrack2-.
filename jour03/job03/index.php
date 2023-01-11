<?php
    $str = "I'm sorry Dave I'm afraid I can't do that";
    $voy = ["a", "e", "i", "o", "y", "A", "E", "I", "O", "Y"];
    for($i=0; isset($str[$i])!=null; $i++) {
        foreach($voy as $voyelle){
            if($str[$i] == $voyelle){
                echo $str[$i];
            }
        }
    }
?>