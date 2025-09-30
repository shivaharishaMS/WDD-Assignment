
<?php
function averageArray($arr) {
    return array_sum($arr) / count($arr);
}

echo averageArray([10, 20, 30, 40]); 
?>
