<?php

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'admin', '123456', [
    PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
]);

$statement = $db->query('select * from roles');
$row1 = $statement->fetch();
$row2 = $statement->fetch();
$row3 = $statement->fetch();
echo "<pre>";
print_r($row1);
print_r($row2);
