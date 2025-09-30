
<?php
$file1 = file_get_contents("file1.txt");
$file2 = file_get_contents("file2.txt");

file_put_contents("merged.txt", $file1 . "\n" . $file2);
echo "Files appended into merged.txt";
?>
