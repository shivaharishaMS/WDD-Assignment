
<?php
$mail = "admin@example.com";
$mail = str_replace("a","@",$mail);
echo "Contact me at $mail.";
?>

OUTPUT: Contact me at @dmin@ex@mple.com.


 <?php
$names = array("alex", "jean", "emily", "jane");
$name = preg_grep("/^e/", $names);
print_r($name);
?>

OUTPUT: Array
(
[2] => emily
)
