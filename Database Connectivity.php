
<?php
 $conn = new mysqli("127.0.0.1:3306","root","","hello_world");
if($conn ->connect_error) die ("Connection failed: " .$conn ->connect_error);

 if($_SERVER["REQUEST_METHOD"]=="POST"){
$u=$_POST["username"];
$p=$_POST["password"];
if($conn -> query ( "INSERT into employee (username,password)VALUES ('$u','$p')")===TRUE){
echo "Login successful!";
}else{
echo "Error";
}
}
?>

<h2>EMPLOYEE LOGIN FORM</h2>
<form method = "post">
Username : <input type="text" name="username" required><br><br>
Password : <input type="text" name="password" required><br><br>
<input type="submit" value="LOGIN">
</form>
