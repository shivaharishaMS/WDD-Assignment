
<?php
$queue = [];

array_push($queue, "Customer1", "Customer2", "Customer3");

while (!empty($queue)) {
    $person = array_shift($queue);
    echo "$person booked a ticket.<br>";
}
?>
