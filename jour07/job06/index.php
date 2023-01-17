<?php
    function leetSpeek($str) {
        $res = '';
        for($i=0; isset($str[$i]); $i++) {
            if($str[$i] == 'a' || $str[$i] == "A") {
                $res .= 4;
            } elseif($str[$i] == 'b' || $str[$i] == "B") {
                $res .= 8;
            } elseif($str[$i] == 'e' || $str[$i] == "E") {
                $res .= 3;
            } elseif($str[$i] == 'g' || $str[$i] == "G") {
                $res .= 6;
            } elseif($str[$i] == 's' || $str[$i] == "S") {
                $res .= 5;
            } elseif($str[$i] == 'l' || $str[$i] == "L") {
                $res .= 1;
            } elseif($str[$i] == 't' || $str[$i] == "T") {
                $res .= 7;
            } else {
                $res .= $str[$i];
            }
        }

        return $res;
    }
    echo leetSpeek("je suis WAHIL");