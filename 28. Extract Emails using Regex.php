
<?php
$text = "Send mail to admin@test.com and info@example.org";
preg_match_all("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}/", $text, $matches);
print_r($matches[0]);
?>
