
<?php
// Start a session
session_start();

// Set session variables
$_SESSION['username'] = "Alice";
$_SESSION['role'] = "Admin";

// Display session data
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Role: " . $_SESSION['role'] . "<br>";

// Display session ID
echo "Session ID: " . session_id();
?>
