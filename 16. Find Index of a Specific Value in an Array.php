
<?php
$fruits = ["Apple", "Banana", "Mango", "Orange"];

$search = "Mango";
$index = array_search($search, $fruits);

if ($index !== false) {
    echo "$search found at index: $index";
} else {
    echo "$search not found";
}
?>
