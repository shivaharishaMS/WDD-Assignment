
<?php
function sumEven($arr){
    $sum = 0;
    foreach($arr as $num){
        if($num % 2 == 0){
            $sum += $num;
        }
    }
    return $sum;
}

$numbers = [1, 2, 3, 4, 5, 6];
echo "Sum of even numbers: " . sumEven($numbers);
?>
