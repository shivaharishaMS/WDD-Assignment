
<html>
<body>
<form method="post">
Enter numbers (comma separated): <br>
<input type="text" name="nums">
<input type="submit" value="Submit">
</form>

<?php
if($_POST){
    $nums = explode(",", $_POST['nums']); // convert to array
    $nums = array_map('trim', $nums); // remove spaces
    print_r($nums);
}
?>
</body>
</html>
