
<html>
<head><title>Quiz Application</title></head>
<body>
<h2><center>QUIZ APPLICATION</center></h2>
<h3>Check your knowledge !</h3>
<form method="post">

Question 1: What is the captial of France? <br><br>
<input type="radio" name="q1" value="Paris" required>Paris<br>
<input type="radio" name="q1" value="London">London<br>
<input type="radio" name="q1" value="Berlin">Berlin<br><br><br>


Question 2: What is the answer for 2+2? <br><br>
<input type="radio" name="q2" value="7">7<br>
<input type="radio" name="q2" value="4" required>4<br>
<input type="radio" name="q2" value="8">8<br><br><br>
<input type="submit" name="submit" value="CHECK ANSWERS">
</form>

<?php
if(isset($_POST["submit"])){
$correct=['q1'=>'Paris','q2'=>'4'];
$users=['q1'=>$_POST['q1'], 'q2'=>$_POST['q2']];
$score=0;

foreach($users as $q=>$ans){
if($ans==$correct[$q]) $score++;
}
echo "RESULT : You have scored ".$score." out of 2.";
}
?>
</body></html>
