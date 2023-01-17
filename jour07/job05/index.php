<?php
    function occurences($str, $char) {
        $counter = 0;
        for($i=0; isset($str[$i]); $i++) {
            if($str[$i] == $char) {
                $counter++;
            }
        }
        return $counter;
    }

    echo occurences("Bonjour", "o");