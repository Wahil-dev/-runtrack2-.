<?php
    $serverName = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "jour09";

    try {
        $conn = new PDO("mysql:host=$serverName; dbname=$dbname", $user, $pass);
        $request = $conn->query("SELECT salles.nom, etage.nom as nom_etage FROM salles JOIN etage on etage.id = salles.id_etage");
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
                    <th>nom_salle</th>
                    <th>nom_etage</th>
                </tr>
            </thead>
            <tbody>
                <?php while($result = $request->fetchObject()) :?>
                    <tr>
                        <td><?= $result->nom;?></td>
                        <td><?= $result->nom_etage;?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else :?>
        <h2>Table Vide</h2>
    <?php endif; ?>
</body>
</html>