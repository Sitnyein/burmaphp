<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h3 class="mt-3">  <a href="./create.php">Create</a></h3>
    <!-- <table class="table  mt-5 ">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Town</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody> -->
   <?php 

try{
  
    $pdo=new pdo("mysql:dbname=testing;host=localhost",'root','admin',);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $statement=$pdo->query('
      select * from testing;
    ');
    $results = $statement->fetchALL(PDO::FETCH_ASSOC);
    // die(var_dump($results));
    foreach($results as $result) {
      //  echo "<tr>
      //  <td>{$result['id']}</td>
      //  <td>{$result['name']}</td>
      //  <td>{$result['email']}</td>
      //  <td>{$result['town']}</td>
      //  <td>
      //  <a href='./update.php?id=>update</a> |
      //  <a href='./delete.php?id='>delete</a>
      // </td>

       
      //  </tr>"
      echo "<p> {$result['id']} -- {$result['name']}--{$result['email']}--{$result['town']} 
      <a href='create.php'>update.php</a> 
      <a href='create.php'>delete.php</a>
      </p>"



       
    ;}
    
    
    } catch (PDOException $e){
     die($e->getMessage());
    };  

 
   
   ?>

  <!-- </tbody>
</table> -->

</body>
</html>

