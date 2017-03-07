<?php

  include 'header.php';
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>


<h1 class="contact-list">Contact List <span>(<?= count($contacts); ?>)</span></h1>

<div class="container-fluid">

    <div class="row">

      <div class="col-xs-11 col-xs-offset-1 col-md-9 col-md-offset-3 tableContainer">

<table class="table">
  <?php foreach($contacts as $contact) : ?>
  <tbody class="tableStyle">
    <tr>
      <td class="id"><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['id']; ?></a></td>
      <td><a class="image" href="/edit.php?id=<?= $contact['id'];?>"><img src="uploads/<?= $contact['photo']; ?>"></a></td>
      <td><a href="/edit.php?id=<?= $contact['id'];?>"><?= $contact['first'] . " " . $contact['last'];?></a></td>
    </tr>
        <tr class="innerInfo">
          <td></td>
          <td></td>
          <td><a href="/edit.php?id=<?= $contact['id'];?>"><?= $contact['city']; ?></a><a href="/edit.php?id=<?= $contact['id'];?>"><?= $contact['state']; ?></a><a href="/edit.php?id=<?= $contact['id'];?>"><?= $contact['phone']; ?></a></td>
        </tr>

  </tbody>
    <?php endforeach; ?>
</table>




<?php include 'footer.php'; ?>
