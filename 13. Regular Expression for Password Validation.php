
<?php
$passwords = ["Hello@123", "weakpass", "Test1234", "Abc@2025"];

$pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/";

foreach ($passwords as $pwd) {
    if (preg_match($pattern, $pwd)) {
        echo "$pwd Valid Password <br>";
    } else {
        echo "$pwd Invalid Password <br>";
    }
}
?>
