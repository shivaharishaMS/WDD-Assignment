
<?php
$students = [
    "Alice" => 85,
    "Bob"   => 72,
    "Clara" => 90,
    "David" => 58
];


function getGrade($score) {
    if ($score >= 90) return "A";
    elseif ($score >= 75) return "B";
    elseif ($score >= 60) return "C";
    else return "D";
}


echo "<h3>Student Report</h3>";
foreach ($students as $name => $score) {
    $grade = getGrade($score);
    echo "$name - Score: $score - Grade: $grade <br>";
}

$avg = array_sum($students) / count($students);
echo "<br>Class Average: " . round($avg, 2);
?>
