<?php
$filename = "sample.txt";
$n = 3; 

if(file_exists($filename)){
    $lines = file($filename); 
    if(isset($lines[$n-1])){
        echo "Line $n: " . $lines[$n-1];
    } else {
        echo "No data";
    }
} else {
    echo "File not found!";
}
?>