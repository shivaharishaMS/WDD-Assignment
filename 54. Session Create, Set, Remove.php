
<?php
session_start();

$_SESSION['username'] = "Alice";
$_SESSION['role'] = "Admin";

echo "Username: ".$_SESSION['username']."<br>";
echo "Role: ".$_SESSION['role']."<br>";

unset($_SESSION['role']);

session_destroy();
?>
