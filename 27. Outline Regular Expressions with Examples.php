
<?php
$str = "My number is 9876543210";
if (preg_match("/[0-9]{10}/", $str, $match)) {
    echo "Found: " . $match[0];
}
?>
