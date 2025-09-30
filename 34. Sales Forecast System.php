
<?php
$sales = [1000, 1200, 1500, 1800, 2100]; 

$growthRates = [];
for($i=1; $i<count($sales); $i++){
    $growthRates[] = ($sales[$i] - $sales[$i-1]) / $sales[$i-1] * 100;
}

$avgGrowth = array_sum($growthRates) / count($growthRates);

$lastSale = end($sales);
$forecast = $lastSale + ($lastSale * $avgGrowth/100);

echo "Average Growth Rate: " . round($avgGrowth,2) . "%<br>";
echo "Forecasted Next Sales: " . round($forecast,2);
?>
