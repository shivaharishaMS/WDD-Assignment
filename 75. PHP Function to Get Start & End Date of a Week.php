
<?php
function getStartAndEndDate($week, $year){
    $dto = new DateTime();
    $dto->setISODate($year, $week); 
    $ret['start'] = $dto->format('Y-m-d'); 
    $dto->modify('+6 days');
    $ret['end'] = $dto->format('Y-m-d'); 
    return $ret;
}

$week = 12;
$year = 2014;
$dates = getStartAndEndDate($week, $year);
echo "Week $week of $year starts on: " . $dates['start'] . "<br>";
echo "Week $week of $year ends on: " . $dates['end'];
?>
