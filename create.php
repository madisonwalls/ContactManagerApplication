<?php

include 'database.php';

$stmt = $db->prepare("INSERT INTO contacts
  (first, last, address, city, state, zip, phone, notes)
  VALUES
  (:first, :last, :address, :city, :state, :zip, :phone, :notes)
");

$stmt->execute(array(
  ':first' => $_POST['first'],
  ':last' => $_POST['last'],
  ':address' => $_POST['address'],
  ':city' => $_POST['city'],
  ':state' => $_POST['state'],
  ':zip' => $_POST['zip'],
  ':phone' => $_POST['phone'],
  ':notes' => $_POST['notes'],
));

$id = $db->lastInsertID();

header('location: http://localhost:8888/edit.php?id=' . $id . '&created=true');


 ?>
