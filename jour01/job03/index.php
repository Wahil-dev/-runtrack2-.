<?php
    $str = "chaine de caractère";
    $int = 12;
    $float = 12.12;
    $bol = true;
?>

<table>
    <thead>
        <tr>type</tr>
        <tr>nom</tr>
        <tr>value</tr>
    </head>
    <tbody>
        <tr>
            <?php
                echo '<td>'.gettype($int).'</td>';
                echo '<td>'.'int'.'</td>';
                echo '<td>'.$int.'</td>';
            ?>
        </tr>
        <tr>
            <?php
                echo '<td>'.gettype($str).'</td>';
                echo '<td>'.'str'.'</td>';
                echo '<td>'.$str.'</td>';
            ?>
        </tr>
        <tr>
            <?php
                echo '<td>'.gettype($float).'</td>';
                echo '<td>'.'float'.'</td>';
                echo '<td>'.$float.'</td>';
            ?>
        </tr>
        <tr>
            <?php
                echo '<td>'.gettype($bol).'</td>';
                echo '<td>'.'bol'.'</td>';
                echo '<td>'.'true'.'</td>';
            ?>
        </tr>
    </tbody>
</table>