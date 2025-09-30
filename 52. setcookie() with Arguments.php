
<?php

setcookie("user", "Alice", time()+3600, "/", "", false, true);

if(isset($_COOKIE['user'])){
    echo "Cookie Value: " . $_COOKIE['user'];
} else {
    echo "Cookie not set yet!";
}
?>
