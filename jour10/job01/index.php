<?php
    $serverName = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "jour09";

    $conn = new mysqli($serverName, $user, $pass, $dbname);
    if ($conn->connect_errno) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }
    $request = $conn->query("SELECT * FROM etudiants");
    $result = $request->fetch_all(MYSQLI_ASSOC);
    /* check connection */
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <thead>
            <tr>
                <?php
                    foreach($result[0] as $key => $value): ?>
                        <th><?= $key ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i=1; isset($result[$i]); $i++): ?>
                    <tr>
                        <td><?= $result[$i]["id"] ?></td>
                        <td><?= $result[$i]["prenom"] ?></td>
                        <td><?= $result[$i]["nom"] ?></td>
                        <td><?= $result[$i]["naissance"] ?></td>
                        <td><?= $result[$i]["sexe"] ?></td>
                        <td><?= $result[$i]["email"] ?></td>
                    </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>