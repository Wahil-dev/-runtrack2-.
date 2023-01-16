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
        <select id="menu" name="styles">
            <option value="">--Please choose an style--</option>
            <option value="style1">style1</option>
            <option value="style2">style2</option>
            <option value="style3">style3</option>
        </select>
        <input type="submit" value="change style">
    </form>
    <?php
        if(isset($_GET["styles"])) {
            $style = $_GET["styles"];?>
            <style>
                <?php include "css/$style.css"?>
            </style>
        <?php }?>
</body>
</html>