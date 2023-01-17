<?php
    function gras($str) {
        return "<b>$str</b>";
    }

    function cesar($str, $decalage) {
        $lettre_table = "abcdefghijklmnopqrstefwxyz";
        $new_txt = "";
        $t = 0;
        for($t; isset($lettre_table[$t]); $t++) {}
        $length = $t-1;
        for($i=0; isset($str[$i]); $i++) {
            for($j=0; isset($lettre_table[$j]); $j++) {
                if($str[$i] == $lettre_table[$j]) {
                    if(isset($lettre_table[$j+$decalage])) {
                        $new_txt .= $lettre_table[$j+$decalage];
                        break;
                    } else {
                        $space = 0;
                        if($length - $j == 0) {
                            $space += $decalage-1;
                        } else {
                            $space = $length - $j;
                            $space = $decalage-1 - $space;
                        }
                        $new_txt .= $lettre_table[$space];
                        break;
                    }
                }
            }
        }
        return $new_txt;
    }

    function plateforme($str) {
        $i = 0;
        while(isset($str[$i])) {
            $i++;
        }
        $last_two_letter = $str[$i-2].$str[$i-1];
        if($last_two_letter == "me") {
            $str .= "_";
        }
        return $str;
    }
    if(isset($_POST["str"], $_POST["fonction"])) {
        $str = $_POST["str"];
        $function = $_POST["fonction"];
        echo $function($str, 2);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="str">
        <select name="fonction" id="fonction">
            <option value="gras">gras</option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>
        </select>
        <button>submit</button>
    </form>
</body>
</html>