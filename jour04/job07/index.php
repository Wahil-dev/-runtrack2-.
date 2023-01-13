<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label for="largeur">Largeur :</label>
        <input type="text" name="largeur" id="largeur">
        <label for="hauteur">Hauteur :</label>
        <input type="text" name="hauteur" id="hauteur">
        <input type="submit" value="submit">
    </form>
    <?php 
        if(isset($_GET['largeur'], $_GET['hauteur'])) {
            $hauteur = $_GET['hauteur'];
            $largeur = $_GET['largeur'];
            $div_largeur = $hauteur;
            $fois_largeur = $hauteur*2+2;
            $num = 1;
            for($h=1; $h<=$hauteur; $h++) {
                for($i=0; $i<$fois_largeur; $i++) {
                    if($i==$div_largeur-1) {
                        echo "/";
                        
                    } else if($i==$hauteur+$num) {
                        echo "\\";

                    } elseif($i==$fois_largeur-1) {
                        echo '&nbsp<br>';

                    } elseif($i>=$div_largeur && $i<$hauteur+$num ) {
                        echo "<span style='color:red'>_</span>";

                    } else {
                        echo '&nbsp&nbsp';
                    }
                }
                $num+=1;
                $div_largeur--;
            }

            for($h=0;$h<$hauteur; $h++) {
                echo '|';
                for($l=0; $l<$fois_largeur-2; $l++) {
                    if($h < $hauteur-1) {
                        echo '&nbsp&nbsp';
                    } else {
                        echo '_';
                    }
                }
                echo '|<br>';
            } 
        }
    ?>
</body>
</html>
