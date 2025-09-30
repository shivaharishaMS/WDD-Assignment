
<?php
$file = fopen("demo.txt", "w");
fwrite($file, "Hello File Handling in PHP!\n");
fclose($file);

$content = file_get_contents("demo.txt");
echo nl2br($content);
?>
