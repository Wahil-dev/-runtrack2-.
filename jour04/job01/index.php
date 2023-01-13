
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01 -> jour04</title>
</head>
<body>
    <form method="get">
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>
    <?php
        $txt = "Le nombre d’argument GET envoyé est :";
        if(isset($_GET["name"])) {
            $username = $_GET["name"];
            echo $txt.$username;
        }
    ?>
</body>
</html>
