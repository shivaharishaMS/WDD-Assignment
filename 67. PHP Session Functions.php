
<?php
session_start();

echo "Session ID: " . session_id() . "<br>";
echo "Session Name: " . session_name() . "<br>";
$_SESSION['username'] = "Alice";
$_SESSION['role'] = "Admin";

echo "Session variables are set.<br>";
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Role: " . $_SESSION['role'] . "<br>";

unset($_SESSION['role']);
echo "After unset, Role is: ";
echo isset($_SESSION['role']) ? $_SESSION['role'] : "removed";
echo "<br>";
?>
