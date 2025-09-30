
<?php
$x = array(1, 2, 3, 4, 5);
unset($x[2]);

echo "Array after deletion: <br>";
foreach ($x as $value) {
    echo $value . " ";
}
?>
