
<html>
<head>
<body>
<form method="post">
<h2> Perform Exception Handling</h2>
Dividend: <input type="number" name="divi" required><br><br>
Divisor: <input type="number" name="div" required><br><br>
<input type="submit" name="submit" value="DIVIDE"><br><br>
</form>

<?php
class DivideByZeroException extends Exception{}
class DivideByNegativeNoException extends Exception{}

function checkDivisor($a,$b){
try{
if($b==0) throw new  DivideByZeroException();
if($b<1) throw new DivideByNegativeNoException();
echo " Result of Division : ",($a/$b);
}
catch(DivideByZeroException)
{echo "Error : Cannot Divide by Zero";}

catch(DivideByNegativeNoException)
{echo "Error : Cannot Divide by Negative number";}

}
if($_POST){
checkDivisor($_POST["divi"],$_POST["div"]);
}
?>
</body></html>
