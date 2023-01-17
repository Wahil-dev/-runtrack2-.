<?php
    function calcule($a, $operation, $b) {
        switch ($operation) {
            case "+":
                return $a + $b;
            case "-":
                return $a - $b;
            case "*":
                return $a * $b;
            case "/":
                return $a / $b;
            case "%":
                return $a % $b;
            default:
                return "Invalid operation";
        }
    }

    echo calcule(5, "/", 2);