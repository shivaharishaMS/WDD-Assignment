
<?php
session_start();

if(isset($_GET['logout'])){
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']); // refresh page
    exit;
}

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    
    if($user === "admin" && $pass === "1234"){
        $_SESSION['admin'] = $user;
    } else {
        echo "<p style='color:red;'>Invalid username or password!</p>";
    }
}

if(isset($_SESSION['admin'])){
    echo "<h2>Welcome, Admin!</h2>";
    echo "<a href='?logout=true'>Logout</a>";
} else {
    
    ?>
    <h2>Admin Login</h2>
    <form method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
    <?php
}
?>
