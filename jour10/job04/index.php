<?php
    $serverName = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "jour09";

    try {
        $conn = new PDO("mysql:host=$serverName; dbname=$dbname", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $request = $conn->prepare("SELECT * FROM etudiants WHERE LEFT (prenom, 1) = 'T'");
        $request->execute();
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo $e->getMessage();
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
    <?php if(!empty($result)) :?>
        <table border='4'>
            <thead>
                <tr>
                    <?php foreach($result[0] as $key => $value) :?>
                        <th><?= $key; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <thead>
                <?php 
                    for($i=0; isset($result[$i]); $i++) :?>
                        <tr>
                            <th><?= $result[$i]["id"] ?></th>
                            <th><?= $result[$i]["prenom"] ?></th>
                            <th><?= $result[$i]["nom"] ?></th>
                            <th><?= $result[$i]["naissance"] ?></th>
                            <th><?= $result[$i]["sexe"] ?></th>
                            <th><?= $result[$i]["email"] ?></th>
                        </tr>
                <?php endfor; ?>
            </thead>
        </table>

    <?php else :?> <h2>Table Vide</h2>
    <?php endif; ?>
</body>
</html>