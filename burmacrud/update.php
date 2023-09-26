<?php

 try{
  
   $pdo=new pdo("mysql:dbname=testing;host=localhost",'root','admin');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement=$pdo->prepare("
UPDATE testing SET name=:name,email=:email,town=:town WHERE id = :id 
");
$statement->bindParam(":id",$_POST['id']);
$statement->bindParam(":name",$_POST['name']);
$statement->bindParam(":email",$_POST['email']);
$statement->bindParam(":town",$_POST['town']); 
if( $statement->execute()) {
   echo "new student is updated ";
}

   

   } catch (PDOException $e){
    die($e->getMessage());
   };  


?>