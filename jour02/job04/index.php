<?php
    $max = 100;
    for($i=0;$i<=$max; $i++) {
        if($i%3==0) {
            echo "<br>Fizz";
            continue;
        } else if($i%5==0) {
            echo "<br>Buzz";
            continue;
        } else if($i%3==0 && i%5==0) {
            echo "<br>FizzBuzz";
            continue;
        }

        echo "<br>$i";
    }
?>