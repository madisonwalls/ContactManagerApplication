<?php

  include 'header.php';
  $tasks = $db->query('SELECT * FROM tasks')->fetchAll(PDO::FETCH_ASSOC);

?>


<?php include 'footer.php'; ?>
