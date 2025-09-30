
<?php
session_start();

if(isset($_SESSION['pageview'])){
    $_SESSION['pageview']++;
} else {
    $_SESSION['pageview'] = 1;
}

echo "You have visited this page " . $_SESSION['pageview'] . " times.";
?>
