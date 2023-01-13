


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Nom : <input type="text" name="nom">
        Prénom : <input type="text" name="prénom">
        <input type="submit" value="submit">
    </form>

    <?php 
        if(isset($_GET['nom'], $_GET['prénom'])) {
            echo "<table border='2'>
                <thead>
                    <tr>
                        <td>Argument</td>
                        <td>Valeur</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nom</td>
                        <td>".$_GET['nom']."</td>
                    </tr>
                    <tr>
                        <td>Prénom</td>
                        <td>".$_GET['prénom']."</td>
                    </tr>
                </tbody>
            </table>";
        }
    ?>
</body>
</html>