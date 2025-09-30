
<html>
<head>
<title>Bank Transaction</title>
</head>
<body>
<form method = "post">
<h2>BANK TRANSACTION</h2>
Initial Balance : <input type="number" name="inbal" required><br><br>
Number of transactions to be made : <input type="number" name="numT" required><br><br>
Choose the type of transaction : <select name="typeT">
<option value="depo">Deposit</option>
<option value="with">Withdraw</option><select><br><br>
Amount : <input type="number" name="amt" required><br><br>
<input type="submit" value="Perform Transaction">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$bal=$_POST["inbal"];
$n=$_POST["numT"];
$type=$_POST["typeT"];
$a=$_POST["amt"];

echo " <h3> Transaction Performed </h3> ";
echo " Initial Balance : $bal  <br><br>";
for($i=1; $i<=$n; $i++){

if($type=="depo"){
$bal += $a ;
echo "Transaction $i : +$a <br><br>";
}

elseif($type=="with"){
if($a<=$bal){
$bal -= $a ;
echo " Transaction $i : -$a <br><br> ";
}
else echo " Insuffcient Balance. <br><br> ";
}

echo " Final Balance : $bal  <br><br>";
}
}
?>
</body></html>
