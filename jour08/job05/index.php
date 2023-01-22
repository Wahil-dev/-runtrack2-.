

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
        <table>
            <tbody>
                <tr>
                    <td>
                        <button type="submit" name="btn" id="btn1" value="1" class="btn btn-secondary">-</button>
                    </td>
                    <td>
                        <button type="submit" name="btn" id="btn2" value="2" class="btn btn-secondary">-</button>
                    </td>
                    <td>
                        <button type="submit" name="btn" id="btn3" value="3" class="btn btn-secondary">-</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="btn" id="btn4" value="4" class="btn btn-secondary">-</button>
                    </td>
                    <td>
                        <button type="submit" name="btn" id="btn5" value="5" class="btn btn-secondary">-</button>
                    </td>
                    <td>
                        <button type="submit" name="btn" id="btn6" value="6" class="btn btn-secondary">-</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="btn" id="btn7" value="7" class="btn btn-secondary">-</button>
                    </td>
                    <td>
                        <button type="submit" name="btn" id="btn8" value="8" class="btn btn-secondary">-</button>
                    </td>
                    <td>
                        <button type="submit" name="btn" id="btn9" value="9" class="btn btn-secondary">-</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        function changeBtnValue(value, idBtn) {
            btn = document.querySelector(`#${idBtn}`);
            btn.innerHTML = value;
        }
    </script>
    <?php
        if(!isset($_COOKIE['player'])) {
            setcookie("player", 1);
            header("refresh:0");
            exit();
        } else {
            if(isset($_POST['btn'])) {
                $btnClicked = $_POST['btn'];
                $currentPlayer = 1;
                if(!isset($_COOKIE["btnClicked$btnClicked"])) {
                    if($_COOKIE['player'] == 1) {
                        $currentPlayer = 2;
                        // button selected
                        setcookie("btnClicked$btnClicked", $currentPlayer);

                        setcookie("player", $currentPlayer);
                        echo "<script>
                            changeBtnValue('X', 'btn$btnClicked');
                        </script>";
                    } else {
                        $currentPlayer = 1;
                        // button selected
                        setcookie("btnClicked$btnClicked", $currentPlayer);

                        setcookie("player", $currentPlayer);
                        echo "<script>
                            changeBtnValue('O', 'btn$btnClicked');
                        </script>";
                    }
                } else {
                    echo "button selected";
                }
            }
        }
    ?>
</body>
</html>