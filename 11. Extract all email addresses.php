
<?php
$text = "Contact us at support@example.com, info@test.org or admin@domain.net.";

$pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}/";

preg_match_all($pattern, $text, $matches);

print_r($matches[0]);  // Array of emails
?>
