<?php

  include 'header.php';
  $tasks = $db->query('SELECT * FROM tasks')->fetchAll(PDO::FETCH_ASSOC);

?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php include 'footer.php'; ?>
