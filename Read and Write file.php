
<html>
<body>
<h2>FILE READ AND WRITE</h2>

<?php
$file= "write.txt";

if(file_exists($file)){

echo "File size : ".filesize($file). " Bytes <br>";
echo "Content in the file : ".file_get_contents($file)."<br>";
}

file_put_contents($file, "HI ALL. TODAY EXAM");
echo "File after rewritting : ".file_get_contents($file)."<br>";
echo"File size : ".filesize($file)."<br>";
echo "File name : ".$file;

?>
</body></html>
