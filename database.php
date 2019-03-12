<?php

$server = 'fdb20.biz.nf';
$username = '2739265_firza';
$password = 'd3177Fsjarifudin';
$database = '2739265_firza';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
