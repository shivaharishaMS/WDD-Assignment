
<?php
echo "<h2>PHP Array Sorting Functions Demo</h2>";

$numbers = [5, 3, 9, 1, 7];
$assoc = ["d" => 4, "b" => 2, "a" => 3, "c" => 1];
$strings = ["apple10", "apple2", "Banana", "banana", "Orange"];

$sorted = $numbers;
sort($sorted);
echo "<b>sort()</b> (ascending values): ";
print_r($sorted);
echo "<br><br>";

$sorted = $numbers;
rsort($sorted);
echo "<b>rsort()</b> (descending values): ";
print_r($sorted);
echo "<br><br>";

$sorted = $assoc;
asort($sorted);
echo "<b>asort()</b> (values ascending, keys preserved): ";
print_r($sorted);
echo "<br><br>";

$sorted = $assoc;
arsort($sorted);
echo "<b>arsort()</b> (values descending, keys preserved): ";
print_r($sorted);
echo "<br><br>";

$sorted = $assoc;
ksort($sorted);
echo "<b>ksort()</b> (keys ascending): ";
print_r($sorted);
echo "<br><br>";

$sorted = $assoc;
krsort($sorted);
echo "<b>krsort()</b> (keys descending): ";
print_r($sorted);
echo "<br><br>";

$sorted = $numbers;
usort($sorted, function($a, $b) {
    return $b <=> $a; 
});
echo "<b>usort()</b> (custom comparison descending): ";
print_r($sorted);
echo "<br><br>";

$sorted = $assoc;
uksort($sorted, function($a, $b) {
    return strcmp($a, $b); 
});
echo "<b>uksort()</b> (custom key comparison): ";
print_r($sorted);
echo "<br><br>";

$sorted = $assoc;
uasort($sorted, function($a, $b) {
    return $b <=> $a; 
});
echo "<b>uasort()</b> (custom value comparison, keys preserved): ";
print_r($sorted);
echo "<br><br>";

$sorted = $strings;
natsort($sorted);
echo "<b>natsort()</b> (natural order): ";
print_r($sorted);
echo "<br><br>";

$sorted = $strings;
natcasesort($sorted);
echo "<b>natcasesort()</b> (case-insensitive natural order): ";
print_r($sorted);
echo "<br><br>";
?>
