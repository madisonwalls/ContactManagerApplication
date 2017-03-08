<?php

include 'header.php';

?>

<h1>Create Contact</h1>


<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

      <img src="uploads/<?= $contact['photo']; ?>" width="100px" height="auto">

      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />
         <p>Add a Contact Image:</p>
          <input type="file" name="photo" id="photo"/>
          <input class="smallButton" type="submit" value="Update Image" name="submit">
      </form>

<form method="POST" action="/create.php">

  <div class="form-group title">
    <label for="contact_title">Title</label>
    <select name="title" id="contact_title" class="form-control selectInput">
      <option value="Mr">Mr</option>
      <option value="Mrs">Mrs</option>
      <option value="Miss">Miss</option>
      <option value="Ms">Ms</option>
      <option value="Dr">Dr</option>
      <option value="" selected >---</option>
    </select>
  </div>

  <div class="form-group firstname">
    <label for="contact_first">First Name</label>
    <input class="form-control inputField" type="text" name="first" id="contact_first" value="" placeholder="First Name"/>
  </div>

  <div class="form-group lastname">
    <label for="contact_last">Last Name</label>
    <input class="form-control inputField" type="text" name="last" id="contact_last" value=""  placeholder="Last Name"/>
  </div>

    <div class="form-group address">
      <label for="contact_address">Address</label>
      <input class="form-control inputField" type="text" name="address" id="contact_address" value="" placeholder="Address"/>
    </div>

    <div class="form-group city">
      <label for="contact_city">City</label>
      <input class="form-control inputField" type="text" name="city" id="contact_city" value="" placeholder="City"/>
    </div>

    <div class="form-group state">
      <label for="contact_state">State</label>
      <input class="form-control inputField" type="text" name="state" id="contact_state" value="" placeholder="State"/>
    </div>

    <div class="form-group zipcode">
      <label for="zip">Zip Code</label>
      <input class="form-control inputField" type="text" name="zip" id="contact_zip" value="" placeholder="Zip Code"/>
    </div>

    <div class="form-group phone">
      <label for="phone">Phone</label>
      <input class="form-control inputField" type="text" name="phone" id="contact_phone" value="" placeholder="Phone" />
    </div>

    <div class="form-group notes">
      <label for="notes">Notes</label>
      <textarea class="form-control textareaInput" type="text" name="notes" id="contact_notes" value="" placeholder="Notes"></textarea>
    </div>


  <button class="btn regularButton">Create</button>

</form>

</div>
</div>
</div

<?php include 'footer.php'; ?>
