
<?php
session_start();
$_SESSION['username'] = "Alice";  
echo "Session variable set: ".$_SESSION['username'];
?>
