<?php
    session_start();
    function checkIfWin() {
        if(
        ($_SESSION["b1"] == "X" && $_SESSION["b2"] == "X" && $_SESSION["b3"] == "X") ||
        ($_SESSION["b4"] == "X" && $_SESSION["b5"] == "X" && $_SESSION["b6"] == "X") ||
        ($_SESSION["b7"] == "X" && $_SESSION["b8"] == "X" && $_SESSION["b9"] == "X") ||
        ($_SESSION["b1"] == "X" && $_SESSION["b5"] == "X" && $_SESSION["b9"] == "X") ||
        ($_SESSION["b3"] == "X" && $_SESSION["b5"] == "X" && $_SESSION["b7"] == "X") ||
        ($_SESSION["b1"] == "X" && $_SESSION["b4"] == "X" && $_SESSION["b7"] == "X") ||
        ($_SESSION["b2"] == "X" && $_SESSION["b5"] == "X" && $_SESSION["b8"] == "X") ||
        ($_SESSION["b3"] == "X" && $_SESSION["b6"] == "X" && $_SESSION["b9"] == "X")) {
            return 1;
        } elseif(
        ($_SESSION["b1"] == "O" && $_SESSION["b2"] == "O" && $_SESSION["b3"] == "O") ||
        ($_SESSION["b4"] == "O" && $_SESSION["b5"] == "O" && $_SESSION["b6"] == "O") ||
        ($_SESSION["b7"] == "O" && $_SESSION["b8"] == "O" && $_SESSION["b9"] == "O") ||
        ($_SESSION["b1"] == "O" && $_SESSION["b5"] == "O" && $_SESSION["b9"] == "O") ||
        ($_SESSION["b3"] == "O" && $_SESSION["b5"] == "O" && $_SESSION["b7"] == "O") ||
        ($_SESSION["b1"] == "O" && $_SESSION["b4"] == "O" && $_SESSION["b7"] == "O") ||
        ($_SESSION["b2"] == "O" && $_SESSION["b5"] == "O" && $_SESSION["b8"] == "O") ||
        ($_SESSION["b3"] == "O" && $_SESSION["b6"] == "O" && $_SESSION["b9"] == "O")) {
            return 2;
        }
        return false;
    }
    function startGame() {
        $_SESSION["player"] = 1;
        for($i=1; $i<=9; $i++) {
            $_SESSION["b$i"] = "-";
        } 
    }
    function newGame($time) {
        session_unset();
        session_destroy();
        header("refresh:$time");
        exit();
    }
    function endGame() {
        foreach($_SESSION as $value) {
            if($value == "-") {
                return false;
            }
        }
        return true;
    }
    if(!isset($_SESSION["player"])) {
        startGame();
    } else {
        if(isset($_POST['btn'])) {
            $btnClicked = $_POST['btn'];
            $currentPlayer = 1;
            if($_SESSION[$btnClicked] == '-') {
                if($_SESSION["player"] == 1) {
                    $currentPlayer = 2;
                    $_SESSION[$btnClicked] = "X";
                    $_SESSION["player"] = $currentPlayer;
                } else {
                    $currentPlayer = 1;
                    $_SESSION[$btnClicked] = "O";
                    $_SESSION["player"] = $currentPlayer;
                }
                if(checkIfWin() == 1) {
                    echo "player 1 win";
                    newGame(1);
                } elseif(checkIfWin() == 2) {
                    echo "player 2 win";
                    newGame(1);
                }
            } else {
                echo "button selected";
            }
        }
    }
    if(isset($_POST["reset"])) {
        newGame(0);
    }
    echo "
        <h2>Player : ".$_SESSION["player"]."</h2>
    ";
    if(endGame() && !checkIfWin()) {
        echo "End Game !";
        newGame(1);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <div class="">
            <h1></h1>
        </div>
        <table>
            <tbody>
                <?php
                    $c = 1;
                    $mx = 3;
                    for($r=1; $r<=3; $r++) {
                        echo "<tr>";
                        for($c; $c<=$mx; $c++) {
                            echo "<td>
                                <button type='submit' name='btn' id='btn$c' value='b$c' class='btn btn-secondary p-5'>".$_SESSION['b'.$c]."</button>
                            </td>";
                        }
                        echo "</tr>";
                        $mx = $mx+3;
                    }
                ?>
            </tbody>
        </table>
        <input type="submit" name='reset' value='reset' class='btn btn-primary '>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>