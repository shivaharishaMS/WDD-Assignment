
<?php
$error = $success = "";

if(isset($_POST["submit"])){

$name =$_POST["name"];
$num=$_POST["num"];
$email=$_POST["email"];

if(!$name)$error = "Enter your name";
elseif(!$num)$error ="Enter your number";
elseif(!is_numeric($num))$error ="Phone number must have only numbers";
elseif(strlen($num)>10)$error ="Phone number must be only upto 10 digits";
elseif(strlen($num)<10)$error ="Phone number must have 10 digits";
elseif(!$email)$error ="Enter your email id";
elseif(!preg_match("/^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$/",$email))$error ="Enter your correct email id";
else $success="Success!";
}
?>

<html>
<body>
<h2>EMPLOYEE LOGIN FORM</h2>
<?= $error ? "$error" : "" ?>
<?= $success ? "$success" : "" ?>
<form method="post">
Name: <input name="name" value="<?= $name ?? '' ?>"><br><br>
Phone number: <input name="num" value="<?= $num ?? '' ?>"><br><br>
Email :<input name="email" value="<?= $email ?? '' ?>"><br><br>
<input type="submit" name="submit"  value="SUBMIT">
</form></body></html>
