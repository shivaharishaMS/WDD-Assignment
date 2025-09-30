
<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Valid email: $email <br>";
        $domain = substr(strrchr($email, "@"), 1);
        echo "Domain: $domain";
    } else {
        echo "Invalid email!";
    }
}
?>

<form method="post">
    Enter Email: <input type="text" name="email">
    <input type="submit" name="submit" value="Check">
</form>
