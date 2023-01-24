<?php
    $serverName = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "jour09";

    $conn = new mysqli($serverName, $user, $pass, $dbname);
    if($conn->error) {
        printf("Connect failed %s\n", $conn->connect_error);
        exit();
    }
    $request = $conn->query("SELECT nom, capacité FROM salles");
    $result = $request->fetch_all(MYSQLI_ASSOC);
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
                <?php foreach($result[0] as $key => $value) :?>
                    <th><?=$key ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i = 0;
                while(isset($result[$i])) :?>
                    <tr>
                        <td><?= $result[$i]['nom'] ?></td>
                        <td><?= $result[$i]['capacité'] ?></td>
                    </tr>
            <?php $i++; endwhile; ?>
        </tbo>
    </table>
</body>
</html>