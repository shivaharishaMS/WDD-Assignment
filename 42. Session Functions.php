
<?php
session_start();

$_SESSION['user'] = "Alice";

session_unset();

session_destroy();

echo "Session operations performed.";
?>
