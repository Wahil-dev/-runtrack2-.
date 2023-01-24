<?php
    $serverName = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "jour09";

    try {
        $conn = new PDO("mysql:host=$serverName; dbname=$dbname", $user, $pass);
        $request = $conn->prepare("SELECT * FROM salles ORDER BY capacité DESC");
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
    <table border="4">
        <thead>
            <tr>
                <?php foreach($result[0] as $key => $value) :?>
                    <td><?= $key; ?></td>
                <?php endforeach; ?>
            </tr>
        </thead>
        <thead>
            <?php for($i=0; isset($result[$i]); $i++):?>
                <tr>
                    <td><?= $result[$i]["id"];?></td>
                    <td><?= $result[$i]["nom"];?></td>
                    <td><?= $result[$i]["id_etage"];?></td>
                    <td><?= $result[$i]["capacité"];?></td>
                </tr>
            <?php endfor; ?>
        </thead>
    </table>
</body>
</html>