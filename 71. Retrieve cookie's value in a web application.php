
<?php
// Retrieve cookie value
if(isset($_COOKIE['user'])){
    echo "User cookie value: " . $_COOKIE['user'];
} else {
    echo "Cookie not set yet!";
}
?>
