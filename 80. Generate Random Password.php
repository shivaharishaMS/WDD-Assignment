
<?php
function generatePassword($length = 10){
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()";
    $password = "";
    for($i = 0; $i < $length; $i++){
        $password .= $chars[rand(0, strlen($chars)-1)];
    }
    return $password;
}

echo "Random Password: " . generatePassword(12);
?>
