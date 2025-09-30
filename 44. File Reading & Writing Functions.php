
<?php
echo "<h2>PHP File Reading and Writing Example</h2>";

$filename = "sample.txt";

$file = fopen($filename, "w");  // open in write mode
fwrite($file, "Hello, this is line 1.\n");
fwrite($file, "This is line 2.\n");
fclose($file);
echo "File written successfully!<br><br>";


$content = file_get_contents($filename);
echo "<b>Reading with file_get_contents():</b><br>";
echo nl2br($content) . "<br><br>";


$file = fopen($filename, "r");  // open in read mode
echo "<b>Reading line by line using fgets():</b><br>";
while(!feof($file)){
    echo fgets($file) . "<br>";
}
fclose($file);


file_put_contents($filename, "This is an appended line.\n", FILE_APPEND);

echo "<br><b>After appending:</b><br>";
echo nl2br(file_get_contents($filename));
?>
