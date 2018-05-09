<?php
  try {
    $dsn = 'mysql:host=localhost;dbname=roboticsDB';
    $username = 'root'; //what ever your username is to the database
    $password = 'lati'; //what ever your password to the database is

    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->exec('SET NAMES "utf8"');
  } catch (PDOException $e) {
    $output = 'Unable to connect to database server' . $e->getMessage();
    exit();
  }
 ?>
