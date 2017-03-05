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
  <p><strong>Update successful!</strong>. Your task was updated.</p>
</div>
<?php endif; ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">

<a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-danger pull-right">Delete Task</a>
<h1>Edit Contact</h1>

<img src="uploads/<?= $contact['photo']; ?>" width="100px" height="auto">

<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />
    Change Image:
    <input type="file" name="photo" id="photo" value="<?= $contact['photo']; ?>">
    <input type="submit" value="Update Image" name="submit">
</form>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="form-group">
    <label for="contact_first">First Name</label>
    <input class="form-control" type="text" name="first" id="contact_first" value="<?= $contact['first']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_last">Last Name</label>
    <input class="form-control" type="text" name="last" id="contact_last" value="<?= $contact['last']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="last" id="contact_title" value="<?= $contact['title']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" type="text" name="address" id="contact_address" value="<?= $contact['address']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="contact_city" value="<?= $contact['city']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_state">State</label>
    <input class="form-control" type="text" name="state" id="contact_state" value="<?= $contact['state']; ?>" />
  </div>

  <div class="form-group">
    <label for="zip">Zip Code</label>
    <input class="form-control" type="text" name="zip" id="contact_zip" value="<?= $contact['zip']; ?>" />
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['phone']; ?>" />
  </div>

  <div class="form-group">
    <label for="notes">Notes</label>
    <input class="form-control" type="text" name="notes" id="contact_notes" value="<?= $contact['notes']; ?>" />
  </div>


  <button class="btn btn-primary">Save Task</button>

</form>

</div>
</div>
</div>


<?php include 'footer.php'; ?>
