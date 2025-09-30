
<?php
$conn = new mysqli("127.0.0.1:3306","root","","employeedb");
if($conn ->connect_error) die ("Connection failed: ".$conn ->connect_error);

function agg($conn, $q, $l){
$r = $conn ->query($q) ->fetch_assoc();
echo "$l" .$r[array_key_first($r)]. "<br>";
}

agg($conn, "SELECT COUNT(*) as total_user from user" ,"Total Users :");
agg($conn, "SELECT sum(salary) as total_salary from user" ,"Total Salary :");
agg($conn, "SELECT MIN(salary) as min_salary from user" ,"Mininmum Salary :");
agg($conn, "SELECT MAX(salary) as max_salary from user" ,"Maximum Salary :");
agg($conn, "SELECT AVG(salary) as avg_salary from user" ,"Average Salary :");

$conn ->close();

?>
