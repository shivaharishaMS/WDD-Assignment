
<?php
$filename = "sample.txt";

if(file_exists($filename)){
    $content = file_get_contents($filename);
    echo nl2br($content);
} else {
    echo "File not found!";
}
?>
