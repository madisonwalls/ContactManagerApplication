<?php

include 'database.php';


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {

        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {

    $uploadOk = 0;
}
// Check file size
if ($_FILES["photo"]["size"] > 5000000) {

    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "PNG" && $imageFileType != "JPG") {

    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {

    } else {

    }
}

$stmt = $db->prepare('UPDATE contacts SET photo = :photo WHERE id = :id');
//$stmt->bindParam
$stmt->execute(array(
  ':id' => $_POST['id'],
  ':photo' => $_target_file,
));

header('Location: http://localhost:8888/edit.php?updated=true&id=' . $_POST['id']);


?>
