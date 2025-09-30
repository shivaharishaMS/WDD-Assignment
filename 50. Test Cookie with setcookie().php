
<?php
setcookie("TestCookie", "HelloCookie", time()+3600);

if(isset($_COOKIE['TestCookie'])){
    echo "Cookie Value: " . $_COOKIE['TestCookie'];
} else {
    echo "Cookie not set yet.";
}
?>
