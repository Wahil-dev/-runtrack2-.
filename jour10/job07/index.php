<?php
    $serverName = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "jour09";

    try {
        $conn = new PDO("mysql:host=$serverName; dbname=$dbname", $user, $pass);
        $request = $conn->query("SELECT sum(superficie) AS superficie_totale FROM etage");
        $request->execute();
        $result = $request->fetchObject();
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
    <table border="4">
        <thead>
            <tr>
                <th>superficie_totale</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $result->superficie_totale ;?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>