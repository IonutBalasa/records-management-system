<?php
$server = 'v.je';
$username = 'student';
$password = 'student';
$schema = 'rms';
$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,
[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>