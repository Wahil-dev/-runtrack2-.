<?php 
    if(isset($_POST['prenom'])) {
        setcookie("prenom", $_POST['prenom']);
        header("location: index.php");
        exit();
    }
    if(isset($_POST['deco'])) {
        setcookie("prenom", $_POST['prenom'], time());
        header("location: index.php");
        exit();
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
    <?php if(!isset($_COOKIE["prenom"])): ?>
        <form action="" method="post">
            <input type="text" name="prenom" id="">
            <input type="submit" value="connexion" id="">
        </form>
    <?php else :?>
        <p>bonjour <?php $_COOKIE["prenom"]?></p>
        <form action="" method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php endif ?>

</body>
</html>