
<?php
$visits=($_COOKIE['visits']??0)+1;
setcookie('visits',$visits,time()+86400*365);
?>

<html>
<head><title>Cookie</title></head>
<style>
body{
background-color : beige;
font-family : Arial;
color :gray;
text-align : center;
padding :15px;
}

h1{
background-color : brown;
color : golden;
padding :15px;
border-radius :30px;
}

.counter_box{
border-radius :15px;
padding : 30px;
margin-top : 10px;
color : gray;
font-size:30px;
border : 2px dotted black;
display : inline-block;
}

</style>
<body>
<h1>HIT COUNTER BOX FOR COOKIES</h1>
<div class="counter_box">
<?php
if($visits>1){
echo " This is your visit number $visits";
}else{
echo"Welcome to the website!";
}
?>
</div></body></html>
