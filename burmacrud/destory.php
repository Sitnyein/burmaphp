<?php

 try{
  
   $pdo=new pdo("mysql:dbname=testing;host=localhost",'root','admin');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement=$pdo->prepare("
 DELETE from testing WHERE id = :id 
");
$statement->bindParam(":id",$_GET['id']);
if( $statement->execute()) {
   echo " student is deleted ";
}

   

   } catch (PDOException $e){
    die($e->getMessage());
   };  


?>