<?php

include 'header.php';
include 'database.php';

$id = $_GET['id'];

$stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
$stmt->bindParam(':id', $id);
$stmt->execute();

$contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<h1>Step 2: Create Contact</h1>

<!-- New Contact form -->
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">


      <?php
      if ($contact['photo'] !== '') {
          echo "<img class='yellowMan' src='uploads/";  echo $contact['photo']; echo "' width='150px' height='auto'>";
      } else {
          echo "<img class='yellowMan' src='uploads/picIcon.png' width='150px' height='auto'>";
      }
      ?>
      <div class="alert alert-success">
        <p><strong>Your Image Has Been Saved!</strong> Add more contact information below.</p>
      </div>

<form method="POST" action="/create.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="form-group title">
    <label for="contact_title"><p class="inputTitles">Title</p></label>
    <select name="title" id="contact_title" class="form-control selectInputEdit">
      <option value="Mr">Mr</option>
      <option value="Mrs">Mrs</option>
      <option value="Miss">Miss</option>
      <option value="Ms">Ms</option>
      <option value="Dr">Dr</option>
      <option value="" selected >---</option>
    </select>
  </div>

  <div class="form-group firstname">
    <label for="contact_first"><p class="inputTitles">First Name</p></label>
    <input class="form-control inputField" type="text" name="first" id="contact_first" value="" placeholder="First Name"/>
  </div>

  <div class="form-group lastname">
    <label for="contact_last"><p class="inputTitles">Last Name</p></label>
    <input class="form-control inputField" type="text" name="last" id="contact_last" value=""  placeholder="Last Name"/>
  </div>

    <div class="form-group address">
      <label for="contact_address"><p class="inputTitles">Address</p></label>
      <input class="form-control inputField" type="text" name="address" id="contact_address" value="" placeholder="Address"/>
    </div>

    <div class="form-group city">
      <label for="contact_city"><p class="inputTitles">City</p></label>
      <input class="form-control inputField" type="text" name="city" id="contact_city" value="" placeholder="City"/>
    </div>

    <div class="form-group state">
      <label for="contact_state"><p class="inputTitles">State</p></label>
      <input class="form-control inputField" type="text" name="state" id="contact_state" value="" placeholder="State"/>
    </div>

    <div class="form-group zipcode">
      <label for="zip"><p class="inputTitles">Zip Code</p></label>
      <input class="form-control inputField" type="text" name="zip" id="contact_zip" value="" placeholder="Zip Code"/>
    </div>

    <div class="form-group phone">
      <label for="phone"><p class="inputTitles">Phone</p></label>
      <input class="form-control inputField" type="text" name="phone" id="contact_phone" value="" placeholder="(xxx)-xxx-xxxx" />
    </div>

    <div class="form-group notes">
      <label for="notes"><p class="inputTitles">Notes</p></label>
      <textarea class="form-control textareaInput" type="text" name="notes" id="contact_notes" value="" placeholder="Notes"></textarea>
    </div>


  <button class="btn regularButton">Create</button>

</form>

</div>
</div>
</div

<?php include 'footer.php'; ?>
