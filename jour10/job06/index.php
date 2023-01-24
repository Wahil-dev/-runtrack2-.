<?php
    $serverName = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "jour09";

    try {
        $conn = new PDO("mysql:host=$serverName; dbname=$dbname", $user, $pass);
        $request = $conn->query("SELECT COUNT(*) AS nb_etudiants FROM etudiants");
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
    <table border="4">
        <thead>
            <tr>
                <th>nb_etudiants</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $request->fetch(PDO::FETCH_ASSOC)["nb_etudiants"]; ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>