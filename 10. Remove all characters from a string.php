
<?php
$input = "Hello@# World!! 123%$";
$chars = str_split($input);
$filtered = array_filter($chars, function($ch) {
    return preg_match("/[a-zA-Z0-9 ]/", $ch);
});

$output = implode("", $filtered);

echo $output;
?>
