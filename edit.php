<?php

  include 'header.php';

  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('updated', $_GET)) : ?>
<div class="alert alert-success">
  <p><strong>Update successful!</strong> Your photo was updated.</p>
</div>
<?php endif; ?>

<h1>Edit Contact</h1>
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">

<a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-danger pull-right">Delete Contact</a>


<img src="uploads/<?= $contact['photo']; ?>" width="100px" height="auto">

<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />
    Change Image:
    <input type="file" name="photo" id="photo"/>
    <input class="smallButton" type="submit" value="Update Image" name="submit">
</form>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="form-group title">
    <label for="contact_title">Title</label>
    <select name="title" id="contact_title" class="form-control">
      <option value="Mr" <?= ($contact['title'] == 'Mr') ? ' selected' : '' ?>>Mr</option>
      <option value="Mrs"<?= ($contact['title'] == 'Mrs') ? ' selected' : '' ?>>Mrs</option>
      <option value="Miss"<?= ($contact['title'] == 'Miss') ? ' selected' : '' ?>>Miss</option>
      <option value="Ms"<?= ($contact['title'] == 'Ms') ? ' selected' : '' ?>>Ms</option>
      <option value="Dr"<?= ($contact['title'] == 'Dr') ? ' selected' : '' ?>>Dr</option>
      <option value=""<?= ($contact['title'] == '') ? ' selected' : '' ?>>None</option>
    </select>
  </div>

  <div class="form-group firstname">
    <label for="contact_first">First Name</label>
    <input class="form-control" type="text" name="first" id="contact_first" value="<?= $contact['first']; ?>" />
  </div>

  <div class="form-group lastname">
    <label for="contact_last">Last Name</label>
    <input class="form-control" type="text" name="last" id="contact_last" value="<?= $contact['last']; ?>" />
  </div>

  <div class="form-group address">
    <label for="contact_address">Address</label>
    <input class="form-control" type="text" name="address" id="contact_address" value="<?= $contact['address']; ?>" />
  </div>

  <div class="form-group city">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="contact_city" value="<?= $contact['city']; ?>" />
  </div>

  <div class="form-group state">
    <label for="contact_state">State</label>
    <input class="form-control" type="text" name="state" id="contact_state" value="<?= $contact['state']; ?>" />
  </div>

  <div class="form-group zipcode">
    <label for="zip">Zip Code</label>
    <input class="form-control" type="text" name="zip" id="contact_zip" value="<?= $contact['zip']; ?>" />
  </div>

  <div class="form-group phone">
    <label for="phone">Phone</label>
    <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['phone']; ?>" />
  </div>

  <div class="form-group notes">
    <label for="notes">Notes</label>
    <textarea class="form-control" type="textarea" name="notes" id="contact_notes" ><?= $contact['notes']; ?></textarea>
  </div>


  <button class="btn regularButton">Save Task</button>

</form>

</div>
</div>
</div>


<?php include 'footer.php'; ?>
