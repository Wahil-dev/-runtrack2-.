<?php
    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
    $voyelles = ["a", "e", "u", "i", "o", "y", "A", "E", "I", "O", "U", "Y"];

    $consonnes = ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p",
    "q", "r", "s", "t", "v", "w", "x", "z" , "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z"];
    $dic = [
        "consonnes" => 0,
        "voyelles" => 0,
    ];

    $num_voy = 0;
    $num_cons = 0;
    for($i = 0; isset($str[$i]); $i++) {
        foreach($voyelles as $voy) {
            if($voy == $str[$i]) {
                $dic["voyelles"]++;
                continue;
            }
        }
        foreach($consonnes as $cons) {
            if($cons == $str[$i]) {
                $dic["consonnes"]++;
                continue;
            }
        }
    }
?>
    <table border="2">
        <thead>
            <tr>
                <?php foreach($dic as $key => $value): ?>
                <th><?= $key; ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach($dic as $key => $value): ?>
                <td><?= $value; ?></td>
                <?php endforeach; ?>
            </tr>
        </tbody>
        
    </table>
    
