
<?php
function reverseString($str) {
    $stack = str_split($str);   
    $reversed = "";

    while (!empty($stack)) {
        $reversed .= array_pop($stack); 
    }
    return $reversed;
}

echo reverseString("HELLO"); 
?>
