<?php
  $dbhost = 'localhost';
  $dbname = 'chat_app';
  $dbuser = 'root';
  $dbpass = '';

  try {
    $db = new PDO("mysql:dbhost=$dbhost;dbname=$dbname","$dbuser","$dbpass");
  } catch (PDOException $e) {
    echo $e->getMessage();
  }




 ?>
