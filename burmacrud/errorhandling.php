<!-- fatal error app stop
warning error
notice app doesn't stop  -->


<?php 
class greterthanzero extends Exception {}
class greaterthanten extends Exception {}
  $x=0;
  function test($x) {
    if($x<=0) {
        throw new greterthanzero("Error:x must be greater than 0",1000);
      } elseif($x<=10) {
        throw new greaterthanten("Error:x must be greater than 10",1001);
      } elseif($x<=20) {
        throw new Exception("Error:x must be greater than 20",1002);
      } else {
        echo $x;
      } 
  }
 try { 
   test(19);
 } catch(greterthanzero $e) {
   echo $e->getfile();
 } catch(greaterthanten $e) {
    echo $e->getcode();
 } catch(Exception $e) {
    echo $e->getmessage();
 }







?>