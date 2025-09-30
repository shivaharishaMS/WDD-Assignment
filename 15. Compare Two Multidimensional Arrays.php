
<?php
function array_diff_recursive($arr1, $arr2) {
    $diff = [];

    foreach ($arr1 as $key => $value) {
        if (is_array($value)) {
            if (!isset($arr2[$key]) || !is_array($arr2[$key])) {
                $diff[$key] = $value;
            } else {
                $newDiff = array_diff_recursive($value, $arr2[$key]);
                if (!empty($newDiff)) {
                    $diff[$key] = $newDiff;
                }
            }
        } elseif (!array_key_exists($key, $arr2) || $arr2[$key] !== $value) {
            $diff[$key] = $value;
        }
    }
    return $diff;
}

$array1 = [
    "student1" => ["name" => "Alice", "score" => 90],
    "student2" => ["name" => "Bob", "score" => 85]
];

$array2 = [
    "student1" => ["name" => "Alice", "score" => 95],
    "student2" => ["name" => "Bob", "score" => 85]
];

print_r(array_diff_recursive($array1, $array2));
?>
