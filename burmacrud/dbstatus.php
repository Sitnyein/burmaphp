<?php

  try{
    $pdo = new PDO("mysql:dbname=school;hostname=localhost",'root','root');
    die(var_dump($pdo));
  } catch(PDOException $e) {
    die($e->getmessage());
  }
 echo "hello world";
?>