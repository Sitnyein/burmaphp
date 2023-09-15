<?php
 try{
 
   $pdo=new pdo("mysql:dbname=testing;host=localhost",'root','admin');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement=$pdo->prepare("
INSERT INTO `testing` (`name`,`email`,`town`)
VALUE (:name, :email , :town)
");
$statement->bindParam(":name",$_POST['uname']);
$statement->bindParam(":email",$_POST['email']);
$statement->bindParam(":town",$_POST['town']); 
if( $statement->execute()) {
   echo "new student is created ";
}

   

   } catch (PDOException $e){
    die($e->getMessage());
   };  


?>