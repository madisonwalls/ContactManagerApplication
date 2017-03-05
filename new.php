<?php

include 'header.php';

?>

<h1>Create Contact</h1>

<form method="POST" action="/create.php">

  <div class="form-group">
    <label for="contact_first">First Name</label>
    <input class="form-control" type="text" name="first" id="contact_first" value="" placeholder="First Name"/>
  </div>

  <div class="form-group">
    <label for="contact_last">Last Name</label>
    <input class="form-control" type="text" name="last" id="contact_last" value=""  placeholder="Last Name"/>
  </div>

    <div class="form-group">
      <label for="contact_title">Title</label>
      <input class="form-control" type="text" name="last" id="contact_title" value="" placeholder="Title"/>
    </div>

    <div class="form-group">
      <label for="contact_address">Address</label>
      <input class="form-control" type="text" name="address" id="contact_address" value="" placeholder="Address"/>
    </div>

    <div class="form-group">
      <label for="contact_city">City</label>
      <input class="form-control" type="text" name="city" id="contact_city" value="" placeholder="City"/>
    </div>

    <div class="form-group">
      <label for="contact_state">State</label>
      <input class="form-control" type="text" name="state" id="contact_state" value="" placeholder="State"/>
    </div>

    <div class="form-group">
      <label for="zip">Zip Code</label>
      <input class="form-control" type="text" name="zip" id="contact_zip" value="" placeholder="Zip Code"/>
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>
      <input class="form-control" type="text" name="phone" id="contact_phone" value="" placeholder="Phone" />
    </div>

    <div class="form-group">
      <label for="notes">Notes</label>
      <input class="form-control" type="text" name="notes" id="contact_notes" value="" placeholder="Notes"/>
    </div>


  <button class="btn btn-primary">Create</button>

</form>


<?php include 'footer.php'; ?>
