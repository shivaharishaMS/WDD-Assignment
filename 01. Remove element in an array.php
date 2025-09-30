<?php
$fruits = ["Apple", "Banana", "Cherry", "Mango"];

echo "Original array: ";
print_r($fruits);
$removed = array_shift($fruits);

echo "Removed element: " . $removed . "\n";
echo "Array after removing first element: ";
print_r($fruits);
?>