<?php

include 'header.php';

?>

<h1>Step 1: Choose Image</h1>

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      <img class="yellowMan" src="uploads/picIcon.png" width="300px" height="auto">

      <form action="uploadNew.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />
         <p>Add a Contact Image:</p>
          <input type="file" name="photo" id="photo"/>
          <input class="smallButtonCreate" type="submit" value="Update Image" name="submit">
          <input class="smallButtonCreate" type="submit" value="Skip Image" name="submit">
      </form>

</div>
</div>
</div>
