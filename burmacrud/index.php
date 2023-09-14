<?php 
try{
  
$pdo=new pdo("mysql:dbname=school;host=localhost",'root','root',);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement=$pdo->query('
  select * from testing
');
$results = $statement->fetchALL(PDO::FETCH_ASSOC);
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
            <?php foreach($results as $result): ?>
                <p><?php echo $result['id'] . " " . $result['name']."--".$result['email']."--".$result['town'] ?></p>
         
           <?php endforeach; ?>
        </div>
    </div>
    
</body>
</html>