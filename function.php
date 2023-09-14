<?php
//closure anonymous firstclass (implement) just like php auto function mapper()
 $datas=[10,20,30];
 function lopper($items,$closure) {
    $result=[];
   

    
    foreach($items as $item) {
      $result[] = $closure($item); 
    }
    return $result;
 }


//  $result1=[];
//  foreach($datas as $item) {
//    $result1[] = $item *3 /2; 
//  }

//  var_dump($result1);

//firstclass function
// $one =function($piece) {
//     return $piece * 2;
// };
$answer = lopper($datas,function($piece) {
    return $piece * 5;
});
$answer1 = lopper($datas,function($piece) {
    return $piece *3 /2;
});

// $two=function($aaa) {
//     return $aaa *3 /2;
// };

 var_dump($answer);
 var_dump($answer1);
 
?>
<hr>
<?php
$data=[10,20,30];
$result = array_map( function($item){
    return $item*2;
 },$data);
var_dump($result);
?>
<hr>
<?php 
function func($msg) {

    echo "$msg";
    
    }
    $one="func";
    $one("chankhine");
    $var1 = "func";
    
    $var1 ("will this work");

    
   
?>