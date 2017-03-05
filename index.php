<?php

  include 'header.php';
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>


<h1 class="contact-list">Contact List <span>(<?= count($contacts); ?>)</span></h1>

<div class="container">

    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">

<table class="table table-responsive">
  <tbody>
    <?php foreach($contacts as $contact) : ?>

    <tr>
      <td class="id"><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['id']; ?></a></td>
      <td><a class="image" href="/edit.php?id=<?= $contact['id'];?>"><img src="uploads/<?= $contact['photo']; ?>"></a></td>
      <td><a href="/edit.php?id=<?= $contact['id'];?>"><?= $contact['first'] . " " . $contact['last'];?></a></td>
      <td><a href="/edit.php?id=<?= $contact['id'];?>"><?= $contact['city']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contact['id'];?>"><?= $contact['state']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contact['id'];?>"><?= $contact['phone']; ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>




<?php include 'footer.php'; ?>
