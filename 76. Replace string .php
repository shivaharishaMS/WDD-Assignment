
<?php
$str = "The Thing will come to you soon";
$newStr = preg_replace('/\bthe\b/i', 'best', $str, 1);
echo $newStr;
?>
