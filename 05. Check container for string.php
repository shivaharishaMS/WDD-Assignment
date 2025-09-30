
<?php
$haystack = "Welcome to PHP programming!";
$needles = ["PHP", "Java", "Python"]; 

foreach ($needles as $word) {
    if (strpos($haystack, $word) !== false) {
        echo "The string contains: $word <br>";
    } else {
        echo "The string does not contain: $word <br>";
    }
}
?>
