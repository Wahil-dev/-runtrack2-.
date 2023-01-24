<?php
    $serverName = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "jour09";

    try {
        $conn = new PDO("mysql:host=$serverName; dbname=$dbname", $user, $pass);
        $request = $conn->query("SELECT * FROM etudiants WHERE 2023 - LEFT (naissance, 4) > 18");
        $request->execute();

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
    <?php if($request->rowCount()) :?>
        <table border="4">
            <thead>
                <tr>
                    <th>prenom</th>
                    <th>nom</th>
                    <th>naissance</th>
                    <th>sexe</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <?php while($result = $request->fetchObject()) :?>
                    <tr>
                        <td><?= $result->prenom;?></td>
                        <td><?= $result->email;?></td>
                        <td><?= $result->email;?></td>
                        <td><?= $result->email;?></td>
                        <td><?= $result->email;?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else :?>
        <h2>Table Vide</h2>
    <?php endif; ?>
</body>
</html>