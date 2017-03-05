<?php

include 'database.php';

$stmt = $db->prepare("INSERT INTO contacts
  (first, last)
  VALUES
  (:first, :last)
");

$stmt->execute(array(
  ':first' => $_POST['first'],
  ':last' => $_POST['last']
));

$id = $db->lastInsertID();

header('location: http://localhost:8888/edit.php?id=' . $id . '&created=true');


 ?>
