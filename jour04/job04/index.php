<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nom : <input type="text" name="nom">
        Prénom : <input type="text" name="prénom">
        <input type="submit" value="submit">
    </form>

    <?php 
        if(isset($_POST['nom'], $_POST['prénom'])) { ?>
            <table border="2">
                <thead>
                    <tr>
                        <td>Argument</td>
                        <td>Valeur</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($_POST as $key => $value) {
                            echo "<tr>
                                <td>$key</td>
                                <td>$value</td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
    <?php }?>
</body>
</html>