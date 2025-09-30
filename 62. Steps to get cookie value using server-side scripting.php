
<?php
setcookie("user", "Alice", time()+3600); // valid for 1 hour

if(isset($_COOKIE['user'])){
    echo "Cookie value is: ".$_COOKIE['user'];
} else {
    echo "Cookie not set!";
}
?>



//STEPS
1.Set cookie with setcookie().

2.Retrieve value with $_COOKIE['name'].

3.Check if exists using isset().
