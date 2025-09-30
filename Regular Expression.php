
<html>
<head><title>Regular expression</title></head>
<body>
<form method="post">
<h2>REGULAR EXPRESSION</h2>
Enter the string : <input type="text" name="input" required><br><br>
<input type="submit" value="SUBMIT">
</form>

<?php
if(isset($_POST['input'])){
$txt = $_POST['input'];

echo"<h3>Applied Regular Expression to the entered string</h3>";
if(preg_match('/^[a-zA-Z0-9]+$/',$txt)){
echo "Input string contains only letters and numbers. <br>";
}else{
echo "Input string contains characters other than letters and numbers. <br>";
}

preg_match_all('/[a-zA-Z]/',$txt,$m);
echo " Letter in the string : ".implode(",",$m[0])."<br>";

echo "Replace the space in the string with underscore : ".preg_replace('/\s+/','_',$txt)."<br>";

echo "Split the characters in the string : ".implode(",",preg_split('//u',$txt,-1,PREG_SPLIT_NO_EMPTY));
}
?>
</body></html>
