<?php
// constant is only create and read
// define('HI',"hello world");
// echo HI . "<br>";
// $name = "john doe";
// echo $name . "<br>";
// // unset() is delete variable name and values;
// unset($name);
//  echo "hello world this is burma php i am $name...";
// $person= [
//     "name" => "john doe",
//     "age" => 23
// ];
//  var_dump($person);
 
//  $person = [

//     "name" => "Mg Mg",
    
//     "age" => 25,
    
//     "languages"=> ['js','php','python']];

//    var_dump($person);
//    echo "this is <br>";
//    echo $person["languages"] [1];

   
?>

<hr>
<?php
// $cars = array (
//   array("Volvo",22,18),
//   array("BMW",15,13),
//   array("Saab",5,2),
//   array("Land Rover",17,15)
// );
    
// for ($row = 0; $row < 4; $row++) {
//   echo "<p><b>Row number $row</b></p>";
//   echo "<ul>";
//   for ($col = 0; $col < 3; $col++) {
//     echo "<li>". $cars[$row][$col] ."</li>";
//   }
//   echo "</ul>";
// }
//  for ($i=0;$i<4;$i++) {
//     echo "number is $i <br>";
//     echo "<ul>";
//     for($j=0;$j<3;$j++) {
//         echo "{$cars[$i][$j]}<br>";
//     }
//     echo "</ul>";
//  }
// $even = false;

// if ($even = true) {

// echo "it is even number";


// };
?>
<?php 
$fizzbuzz=[];
$fizz=[];
$buzz=[];
$x=[];
for($i=0;$i<=15;$i++){ 
  if($i% 3 == 0 && $i%5 == 0){
      array_push($fizzbuzz,$i);
  }
  elseif ($i%3 == 0) {
    
    array_push($fizz,$i);
   
  }elseif($i%5==0) {
 
     array_push($buzz,$i);

  }else{
    array_push($x,$i);
  }

   
 
 }
print_r($fizzbuzz);
echo "<hr>";
print_r($fizz);
echo "<hr>";
print_r($buzz);
echo "<hr>";
print_r($x);

?>
<h4>***********************************************************************</h4>


<a href="./oop.php?name=chankhine&age=22">click</a>


<?php if(false): ?>
<p>hello</p>
<?php else: ?>
 <h4>False</h4>
<?php endif ?>

<!-- ရေးနည်းကိုတော့ Alternative Syntax လို့ပေ]ါ်ပါတယ်။ တွန့်ကွင်းအKွင့်အပိတ်တွေ မပါတော့တာပါ။
တွန့်ကွင်းအKွင့်အစား Full Colon သင်္ကေတလေးကို သုံးလိုက်ပြီး နောက်ဆုံး တွန့်ကွင်းအပိတ်နေရာမှာ
endif နဲ့ ပိတ်ပေးလိုက်တာပါ။ တွန့်ကွင်းအKွင့်အပိတ်တွေက ရိုးရိုး PHP ကုဒ်ထဲမှာ အဆင်ပြေပေမယ့်
အ]ုလို HTML နဲ့ ရောရေးတဲ့အ]ါ ရေးရတာရော Kတ်ရတာပါ ]က်စေပါတယ်။ ဒါကြောင့် အ]ုလို
Alternative Syntax နဲ့ ရေးလိုက်တဲ့အတွက် ရေးရတာ ပိုအဆင်ပြေသွားသလို၊ Kတ်ရတာလည်း ပိုရှင်း
သွားမှာ ဖြKစ်ပါတယ်။ ဒီရေးနည်းကို while, for နဲ့ switch Statement တွေမှာလည်း အသုံးပြုနိုင်
ပါတယ်။ Array တွေကို Loop ပါတ်Kို့ သုံးရတဲ့ foreach Statement မှာလည်း အသုံးပြုနိုင်ပါတယ်။
ရေးနည်းကိုတော့ သူ့နေရာနဲ့သူ ရောက်လာတဲ့အ]ါ ဆက်ကြည့်ကြပ -->


<h5>******************************************************************************</h5>
<?php
$array= array(1,2,3);
$sum = 0;
for ($i=0;$i<2;$i++) {
  $sum += $array[$array[$i]];
  echo "$sum <br>";
}
echo "the answer is $sum"
?>