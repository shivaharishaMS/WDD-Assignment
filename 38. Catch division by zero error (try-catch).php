
<?php
try {
    $a = 10;
    $b = 0;
    if($b == 0){
        throw new Exception("Division by zero!");
    }
    $c = $a / $b;
    echo $c;
}
catch(Exception $e){
    echo "Error: " . $e->getMessage();
}
?>
