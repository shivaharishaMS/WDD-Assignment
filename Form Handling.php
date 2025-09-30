<html>
<head><title>Conferance</title></head>
<body bgcolor="lightpink">
<form method = "post">
<h2><center>CONFERANCE REGISTRATION</center></h2>
<table align="center" cellpadding="8">

<tr>
<th>Name</th>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<th>Phone number</th>
<td><input type="number" name="num" required></td>
</tr>

<tr>
<th>Email</th>
<td><input type="email" name="email" required></td>
</tr>

<tr>
<th>Organization</th>
<td><input type="text" name="org" required></td>
</tr>

<tr>
<th>Select session</th>
<td><select name="session[]"multiple required>
<option>Session 1</option>
<option>Session 2</option>
<option>Session 3</option></select></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="REGISTER"></td>
</tr>
</table></form>

<?php
if(isset($_POST['submit'])){
echo "<br><hr>";
echo "<h3>Registration Details</h3>";
echo "Name : ".$_POST['name']."<br>";
echo "Phone number : ".$_POST['num']."<br>";
echo "Email ID : ".$_POST['email']."<br>";
echo "Organization : ".$_POST['org']."<br>";
echo "Session : <ul> ";
foreach($_POST["session"] as $s){ echo "<li>$s</li>";}
echo "</ul>";
}
?>
</body></html>