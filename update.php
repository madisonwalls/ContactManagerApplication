<?php


include 'database.php';

$stmt = $db->prepare('UPDATE contacts SET first = :first, last = :last, photo = :photo WHERE id = :id');
//$stmt->bindParam
$stmt->execute(array(
  ':id' => $_POST['id'],
  ':first' => $_POST['first'],
  ':last' => $_POST['last'],
  ':photo' => $_POST['photo'],
));



header('Location: http://localhost:8888/edit.php?updated=true&id=' . $_POST['id']);
