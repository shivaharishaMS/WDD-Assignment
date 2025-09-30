
<?php
session_start();

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "admin" && $pass == "1234"){  
        $_SESSION['admin'] = $user;
        echo "Login successful! <a href='logout.php'>Logout</a>";
    } else {
        echo "Invalid Login!";
    }
}
?>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>




//logout.php

<?php
session_start();
session_destroy();
echo "Logged out successfully.";
?>
