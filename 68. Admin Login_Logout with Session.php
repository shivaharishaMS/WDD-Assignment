
<?php
session_start();

if(isset($_POST['login'])){
    $u = $_POST['user'];
    $p = $_POST['pass'];
    if($u=="admin" && $p=="1234"){
        $_SESSION['admin']=$u;
    } else {
        echo "Invalid login!";
    }
}

if(isset($_GET['logout'])){
    session_destroy();
    header("Location: login.php");
}
?>

<?php 
if(isset($_SESSION['admin'])): ?>
    <h2>Welcome Admin</h2>
    <a href="?logout=true">Logout</a>
<?php else: ?>
    <form method="post">
        User: <input type="text" name="user"><br>
        Pass: <input type="password" name="pass"><br>
        <input type="submit" name="login" value="Login">
    </form>
<?php endif; 
?>
