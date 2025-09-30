
<?php
$text = "PHP is great. I love PHP because PHP is powerful.";
$pattern = "/PHP/";       
$replacement = "Python";  
$result = preg_replace($pattern, $replacement, $text);
echo $result;
?>
