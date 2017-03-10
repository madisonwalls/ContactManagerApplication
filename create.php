<?php

include 'database.php';

$stmt = $db->prepare('UPDATE contacts SET title= :title, first = :first, last = :last, address= :address, city = :city, state = :state, zip = :zip, phone = :phone, notes = :notes WHERE id = :id');
//$stmt->bindParam
$stmt->execute(array(
  ':id' => $_POST['id'],
  ':title' => $_POST['title'],
  ':first' => $_POST['first'],
  ':last' => $_POST['last'],
  ':address' => $_POST['address'],
  ':city' => $_POST['city'],
  ':state' => $_POST['state'],
  ':zip' => $_POST['zip'],
  ':phone' => $_POST['phone'],
  ':notes' => $_POST['notes'],

));

//Send Information back to Home Page//

header('location: http://localhost:8888/index.php?created=true');


 ?>
