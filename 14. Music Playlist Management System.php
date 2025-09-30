
<?php
$playlists = [
    "Favorites" => ["Song A", "Song B", "Song C"],
    "Workout"   => ["Song X", "Song Y"]
];

array_push($playlists["Favorites"], "Song D");

unset($playlists["Workout"][1]);

foreach ($playlists as $listName => $songs) {
    echo "<b>$listName Playlist:</b><br>";
    foreach ($songs as $song) {
        echo "- $song <br>";
    }
    echo "<br>";
}
?>
