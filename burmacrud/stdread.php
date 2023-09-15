<?php 
try{
  
$pdo=new pdo("mysql:dbname=testing;host=localhost",'root','admin',);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement=$pdo->prepare("SELECT * from testing where id=:id");
$statement->bindParam(":id",$_GET['id']);

  if($statement->execute()) {
    $result = $statement->fetch(PDO::FETCH_ASSOC);
   
}
// die(var_dump($results));



} catch (PDOException $e){
 die($e->getMessage());
};  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-4">
        <div class="col-8">
      <?php if($result): ?> 
    <p class="text-success"><?php echo $result['id'] . " " . $result['name']."--".$result['email']."--".$result['town'];  ?></p> 
    <?php else:?>
        <p class="text-danger">student id number not found</p>
    <?php endif;?>
         
         
        </div>
    </div>
    
</body>
</html>