<?php
    $serverName = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "jour09";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli($serverName, $user, $pass, $dbname);
    if($conn->errno) {
        printf("Connect failed %s\n", $conn->connect_errno);
        exit();
    }

    $request = $conn->query("SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'");
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
    <table border='2'>
        <thead>
            <tr>
                <th>prenom</th>
                <th>nom</th>
                <th>naissance</th>
            </tr>
        </thead>
        <tbody>
            <?php while($result = $request->fetch_object()) :?>
                <tr>
                    <th><?= $result->prenom ;?></th>
                    <th><?= $result->nom ;?></th>
                    <th><?= $result->naissance ;?></th>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>