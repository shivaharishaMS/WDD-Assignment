
<html>
<body>
<form method="post" enctype="multipart/form-data">
Upload file: <input type="file" name="file">
<input type="submit" value="Upload">
</form>

<?php
if($_FILES){
    $file = $_FILES['file']['name'];
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if($ext != "jpg" && $ext != "png"){
        echo "Error: Only JPG and PNG files are allowed.";
    } else {
        echo "File uploaded successfully.";
    }
}
?>
</body>
</html>
