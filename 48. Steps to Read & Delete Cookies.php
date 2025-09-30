
<?php
setcookie("user", "Alice", time()+3600);

if(isset($_COOKIE['user'])){
    echo "Hello, " . $_COOKIE['user'];
}

setcookie("user", "", time()-3600);
?>
