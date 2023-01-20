<?php
    session_start();
    if(!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 1;
    } else {
        $_SESSION['nbvisites']++;
        if(isset($_GET['reset'])) {
            $_SESSION['nbvisites'] = 0;
            header("location: index.php");
            exit();
        }
    }
?>

<form action="" method='get'>
    <input type="submit" name='reset' value="reset">
</form>

<?php echo $_SESSION['nbvisites'];