
<?php

$filename = "sample.txt";

$file = fopen($filename, "w");  
fwrite($file, "Hello, this is written in write mode.\n");
fclose($file);

$file = fopen($filename, "r");  
echo "Reading file content:<br>";
echo nl2br(fread($file, filesize($filename))); 
fclose($file);

$file = fopen($filename, "a");  
fwrite($file, "This line is added using append mode.\n");
fclose($file);

$file = fopen($filename, "r+"); 
fwrite($file, "Updated content using r+ mode.\n");
fclose($file);

echo "<br> File operations completed successfully!";
?>
