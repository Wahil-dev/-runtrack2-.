<?php
    //setcookie(name, value, expire, path, domain, secure, httponly);
    $cookieName = "nbvisites";
    $cookieValue = 1;
    if(isset($_COOKIE[$cookieName])) {
        echo "<p>$_COOKIE[$cookieName]</p>";
    } 

    if(!isset($_COOKIE[$cookieName])) {
        setcookie($cookieName, $cookieValue);
        header("refresh:0");
        exit();
    } else {
        $cookieValue = ++$_COOKIE[$cookieName];
        setcookie($cookieName, $cookieValue);
        if(isset($_GET['reset'])) {
            $cookieValue = 0;
            setcookie($cookieName, $cookieValue, time());
            header("location: index.php");
        }
    }
?>

<form action="" method="get">
    <input type="submit" name="reset" value="rest">
</form>

