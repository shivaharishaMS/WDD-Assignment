
<?php
$words = ["Apple", "BaNaNa", "MANGO"];

$lower = array_map("strtolower", $words);

$upper = array_map("strtoupper", $words);

print_r($lower);
print_r($upper);
?>
