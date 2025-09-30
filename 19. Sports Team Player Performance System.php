
<?php
$players = [
    "Alice" => ["runs" => 520, "matches" => 10, "wickets" => 8],
    "Bob"   => ["runs" => 430, "matches" => 12, "wickets" => 15],
    "Clara" => ["runs" => 600, "matches" => 11, "wickets" => 5],
    "David" => ["runs" => 300, "matches" => 9,  "wickets" => 20]
];

$performance = [];

foreach ($players as $name => $stats) {
    $avg_runs = $stats["runs"] / $stats["matches"];
    $index = ($avg_runs * 0.6) + ($stats["wickets"] * 2);

    $performance[$name] = [
        "average_runs" => round($avg_runs, 2),
        "wickets" => $stats["wickets"],
        "performance_index" => round($index, 2)
    ];
}

uasort($performance, function($a, $b) {
    return $b["performance_index"] <=> $a["performance_index"];
});

echo "<h3>Player Performance Report</h3>";
$rank = 1;
foreach ($performance as $player => $data) {
    echo "Rank $rank: $player - Avg Runs: {$data['average_runs']} - Wickets: {$data['wickets']} - Performance Index: {$data['performance_index']} <br>";
    $rank++;
}
?>
