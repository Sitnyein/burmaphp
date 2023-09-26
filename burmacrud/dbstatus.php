<?php
  // phpinfo();
  try{
    $pdo = new PDO("mysql:dbname=testing;hostname=localhost",'root','admin');
    die(var_dump($pdo));
  } catch(PDOException $e) {
    die($e->getmessage());
  }
 echo "hello world";

// $test= new stdClass();
// die(var_dump($test));
?>