
<?php
if(isset($_POST["submit"])){
$s=$_POST["s"];
$ch=$_POST["ch"];
switch($ch){

case'STRING LENGTH':
  $res=strlen($s);
  break;

case'WORD COUNT':
  $res=str_word_count($s);
  break;

case'STRING REPLACE':
  $res=str_replace("hello","world",$s);
  break;

case'STRING SPLIT':
  $res=implode(",",str_split($s));
  break;

case'POSITION OF A CHARACTER':
  $res=strpos($s,"a");
  break;

case'STRING REVERSE':
  $res=strrev($s);
  break;

case'PASSWORD GENERATOR':
  $res=substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"),0,7);
  break;
}
}
?>

<html>
<head><title>String</title></head>
<h2><center>STRING HANDLING</center></h2>
<body bgcolor="beige">
<form method="post">
<table border="1" align="center" cellpadding="8">

<tr>
<th>Enter the string</th>
<td><input type="text" name="s"></td>
</tr>

<tr>
<th>Select the string function</th>
<td><select name="ch">
<option>STRING LENGTH</option>
<option>WORD COUNT</option>
<option>STRING REPLACE</option>
<option>STRING REVERSE</option>
<option>STRING SPLIT</option>
<option>POSITION OF A CHARACTER</option>
<option>PASSWORD GENERATOR</option></select></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="RESULT"></td>
<td><input type="text" value="<?php echo @$res; ?>"readonly></td>
</tr>
</table></form>
</body></html>
