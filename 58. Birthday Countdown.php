
<?php
$today = date("Y-m-d");
$birthday = "2025-12-25";  

$diff = strtotime($birthday) - strtotime($today);
$days = floor($diff / (60*60*24));

echo "Days left until birthday: $days";
?>
