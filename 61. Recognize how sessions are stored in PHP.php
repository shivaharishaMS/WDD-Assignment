
<?php

session_start();

$_SESSION['username'] = "Alice";
$_SESSION['role'] = "Admin";

echo "Username: " . $_SESSION['username'] . "<br>";
echo "Role: " . $_SESSION['role'] . "<br>";

echo "Session ID: " . session_id();
?>




//Sessions are stored on the server-side.

By default:

A session ID is stored in the client’s browser as a cookie (e.g., PHPSESSID).

The actual session data (variables) are stored in temporary files on the server (usually /tmp in Linux).

Example: $_SESSION['username'] = "John"; is stored in a server file linked to the session ID.
