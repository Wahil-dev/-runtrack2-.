<?php
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    $new_str = "";
    $len = 0;
    while(isset($str[$len])) {
        $len++;
    }
    for($i = 1; $i < $len; $i++) {
        if($i == $len-1) {
            $new_str .= $str[$len-1];
            $new_str .= $str[0];
            continue;
        }
        $new_str .= $str[$i];
    }
    echo $new_str;
?>


