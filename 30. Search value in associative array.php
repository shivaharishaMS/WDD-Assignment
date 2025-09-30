
<?php
function searchValue($arr, $value) {
    return array_search($value, $arr);
}

$students = ["id1" => "Alice", "id2" => "Bob", "id3" => "Clara"];
$result = searchValue($students, "Bob");

if ($result !== false) {
    echo "Found at key: $result";
} else {
    echo "Not found";
}
?>
