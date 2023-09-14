<?php 
// try{
  
// $pdo=new pdo("mysql:dbname=school;host=localhost",'root','root',);
// $result=$pdo->query('
// INSERT INTO `students` (`name`,`email`,`gender`,`dob`,`age`)
//  VALUE ("MgMg","mgmg@gmail.com","male","2000-9-20",23)
// ');
// die(var_dump($result));


// } catch (PDOException $e){
//  die($e->getMessage());
// };  
// echo  "hello world";


?>
<hr>
<?php 
try{
  
$pdo=new pdo("mysql:dbname=school;host=localhost",'root','root',);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement=$pdo->query('
  select * from students;
');
$results = $statement->fetchALL(PDO::FETCH_ASSOC);
// die(var_dump($results));
foreach($results as $result) {
    echo "<p> {$result['id']} - {$result['name']} -{$result['email']} </p>"
;}


} catch (PDOException $e){
 die($e->getMessage());
};  
// echo  "hello world";


?>
<hr>
<?php
// $pdo=new pdo("mysql:dbname=school;host=localhost",'root','root',);
// $result=$pdo->query('
// UPDATE students
// SET name="mgkhine" , email="mgkhine@gmail.com"
// where id=6
// ');
// echo "update success";


// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

?>
<!-- UPDATE testing
 SET  email="sanji@gmail.com"
 where id=1; -->