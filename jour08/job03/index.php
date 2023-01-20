<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <form method="post">
        <input type='text' name="name">
        <input type='submit' name="submit" value="submit">
        <input type='submit' name="reset" value="reset">
    </form>

    <?php
        session_start();
        if(isset($_POST["submit"])) {
            if(isset($_POST["name"])) {
                if(!empty($_POST["name"])) {
                    $_SESSION["name"][] = $_POST["name"];
                    header("location: index.php");
                    exit();
                } 
            }
        }
        if(isset($_SESSION["name"])) {
            foreach($_SESSION["name"] as $value) {
                echo "<ul>
                    <li>$value</li>
                </ul>";
            }
        }
        if(isset($_POST["reset"])) {
            unset($_SESSION["name"]);
            session_destroy();
            header("location: index.php");
            exit();
        }
    ?>
</body>
</html>