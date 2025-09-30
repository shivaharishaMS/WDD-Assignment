
<?php
if(isset($_POST['upload'])){
    $target = "uploads/".basename($_FILES['file']['name']);

    if(file_exists($target)){
        echo "File already exists!";
    } else {
        move_uploaded_file($_FILES['file']['tmp_name'], $target);
        echo "File uploaded successfully!";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" name="upload" value="Upload">
</form>
