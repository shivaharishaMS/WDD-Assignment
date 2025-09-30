
<?php
echo "<h2>PHP File Handling Modes Demo</h2>";
$filename = "demo.txt";

$file = fopen($filename, "w");
fwrite($file, "Line 1: Written with mode w (overwrites file)\n");
fclose($file);

$file = fopen($filename, "a");
fwrite($file, "Line 2: Written with mode a (appended)\n");
fclose($file);

$file = fopen($filename, "r");
echo "<b>Contents read with mode r:</b><br>";
while(!feof($file)){
    echo fgets($file) . "<br>";
}
fclose($file);

$file = fopen($filename, "r+");
fwrite($file, "Line 3: Written with mode r+ (read & write)\n");
fclose($file);

$file = fopen($filename, "a+");
fwrite($file, "Line 4: Written with mode a+ (read & append)\n");
rewind($file); // Move pointer to start
echo "<b>Contents after a+ mode:</b><br>";
while(!feof($file)){
    echo fgets($file) . "<br>";
}
fclose($file);
?>
