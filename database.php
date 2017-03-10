<?php
//Reports Errors in Code//

error_reporting(E_ALL);

if (!ini_get('display_errors')) {
 ini_set('display_errors', 1);
}

//Access to database//

$db = new PDO('mysql:host=localhost;dbname=app;charset=utf8mb4', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
