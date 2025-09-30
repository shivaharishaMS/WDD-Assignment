
<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

$lower = array_map('strtolower', $Color);
echo "Values are in lower case.<br>";
print_r($lower);

$upper = array_map('strtoupper', $Color);
echo "<br>Values are in upper case.<br>";
print_r($upper);
?>
