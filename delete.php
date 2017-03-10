<?php

include 'database.php';

//Removes contact from list//

$stmt = $db->prepare('DELETE from contacts WHERE id = :id');
$stmt->execute(array(
  ':id' => $_GET['id']
));

//Returns user to home page//

header('Location: http://localhost:8888/index.php');


 ?>
