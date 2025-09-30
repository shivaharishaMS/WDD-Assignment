
<html>
<head>
<title>Get and Post</title>
</head>
<body>
<form method ="get">
<h3><center>COURSE REGISTRATION</center></h3>
<table border="" align="center" cellpadding="8">

<tr>
<th>Name </th>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<th>SSLC Mark </th>
<td><input type="number" name="sslc" required></td>
</tr>

<tr>
<th>HSC Mark </th>
<td><input type="number" name="hsc" required></td>
</tr>

<tr>
<th>Select Course </th>
<td><select name="course" >
<option>Computer Science</option>
<option>Information Technology</option>
<option>Artificial intelligence</option>
<option>Data Science</option>
<option>Cyber Security</option>
<option>Cognitive System </option></select></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="REGISTER"></td>
</tr>
</table></form>

<?php
if(isset($_GET["submit"])){
echo"<hr>";
echo"<h3>REGISTRATION DETAILS</h3>";
echo "Name : ".$_GET["name"]."<br>";
echo "SSLC Mark : ".$_GET["sslc"]."<br>";
echo "HSC Mark : ".$_GET["hsc"]."<br>";
echo "Course : ".$_GET["course"]."<br>";
}
?>

</body></html>
