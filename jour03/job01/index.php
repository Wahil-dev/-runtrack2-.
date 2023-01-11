<?php
    $table = [200, 204, 15, 173, 98, 171, 404, 459];
    foreach($table as $key => $value) {
        if($value % 2 != 0) {
            echo "$value est impair!<br>";
        } else {
            echo "$value est pair!<br>";
        }
    }
?>