<?php

  include 'header.php';
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>


<h1 class="contact-list">Contact List <span>(<?= count($contacts); ?>)</span></h1>

<!-- Home Page -->
<div class="container-fluid">

    <div class="row">
      <!-- Update Alert -->
      <div class="col-xs-12 col-md-9 col-md-offset-3 tableContainer">
        <?php if (array_key_exists('created', $_GET)) : ?>
      <div class="alert alert-success">
        <p><strong>New Contact Created!</strong> Added to your contact list.</p>
      </div>
        <?php endif; ?>
      <!-- Contact Table -->
      <table class="table">
        <?php foreach($contacts as $contact) : ?>
            <tbody class="tableStyle">
                <tr>
                    <td class="id"><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['id']; ?></a></td>
                    <td><a class="image" href="/edit.php?id=<?= $contact['id'];?>"><?php
                      if ($contact['photo'] !== '') {
                          echo "<img src='uploads/";  echo $contact['photo']; echo "' width='150px' height='auto'>";
                      } else {
                          echo "<img src='uploads/picIcon.png' width='150px' height='auto'>";
                      }
                      ?></a></td>
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

<!-- Floating Create Icon -->
      <a href="step1.php"><div class="addBox"><p class="plus">+</p></div></a>

<?php include 'footer.php'; ?>
