
<?php
$main = "Welcome to PHP programming";
$search = "PHP";

if(strpos($main, $search) !== false){
    echo "String contains '$search'";
} else {
    echo "String does not contain '$search'";
}
?>
