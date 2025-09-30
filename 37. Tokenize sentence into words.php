
<?php
$sentence = "PHP is good. PHP is powerful. PHP is easy.";
$words = preg_split("/[\s,.]+/", strtolower($sentence));

$count = array_count_values($words);
print_r($count);
?>
