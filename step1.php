<?php

include 'header.php';

?>

<h1>Step 1: Choose Image</h1>

<!--Upload Image Page --> 
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      <img class="yellowMan" src="uploads/picIcon.png" width="250px" height="auto">

      <form action="uploadNew.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />
         <p class="paragraphs">Add a Contact Image:</p>
         <strong class="paragraphs">Note:</strong><p class="light-text"> The file will not appear until you click the 'Update Image' button below.</p>
          <input type="file" name="photo" id="photo"/>
          <input class="regularButtonCreate" type="submit" value="Update Image" name="submit">
          <input class="regularButtonCreate" type="submit" value="Skip Image" name="submit">
      </form>

</div>
</div>
</div>

<?php

include 'footer.php';

?>
