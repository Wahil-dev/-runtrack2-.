<?php
    $max = 100;
    for($i=1;$i<=$max; $i++) {
        if($i%3!=0 && $i%5!=0) {
            echo "<br>$i";
        } else {
            if($i%3==0 && $i%5!=0) {
                echo "<br>Fizz";

            } elseif($i%5==0 && $i%3!=0) {
                echo "<br>Buzz";

            } elseif($i%3==0 && $i%5==0) {
                echo "<br>FizzBuzz";
            } 
        }
    }
?>