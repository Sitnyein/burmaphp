<?php
declare(strict_types = 1);
error_reporting(E_ALL);
// int_set("display_error", '1');

 class person {
    public $name;
    public function __construct(string $name="chankhine") {
        $this->name = $name;
        echo "i am $name first construct <br>"; 
    }
    public function say() {
        echo $name. " job is developer <br>";
    }

   
 }

 class anonymous extends person {
           //parent::__construct
        public function __construct() {
          
            echo "this is second construct";
        }
 }

  $chan = new person("sithu");
  $chan->say();

?>

