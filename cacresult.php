<?php

print_r($_POST);
$name="chankhine";
echo $name;
 $num1=$_POST['firstnumber'];
$num2=$_POST['secondnumber'];
$operator=$_POST['ope'];

    switch($operator) {

        case "add"; {
          echo "result is " . $num1+$num2;
          break; 
        }
        case "subtract"; {
          echo "result is ". $num1 - $num2;
          break;
        }
      }

?>