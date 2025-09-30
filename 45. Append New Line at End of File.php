
<?php
function appendLine($filename, $newLine){
    $file = fopen($filename, "a");
    fwrite($file, $newLine . "\n");
    fclose($file);
}

appendLine("myfile.txt", "This is a new line.");
echo "Line appended!";
?>
