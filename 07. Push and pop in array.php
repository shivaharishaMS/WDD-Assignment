
<?php
$fruits = ["Apple", "Banana"];

array_push($fruits, "Mango", "Orange");
print_r($fruits); // [Apple, Banana, Mango, Orange]

$last = array_pop($fruits);
echo "Removed: " . $last; // Orange
print_r($fruits); // [Apple, Banana, Mango]
?>
