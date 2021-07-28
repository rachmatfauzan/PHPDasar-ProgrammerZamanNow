<?php 
    
    // Assign by reference
    $name = "Jaya";

    $otherName = &$name;
    $otherName = "Jaka";

    echo $name . PHP_EOL;

    // pass by reference
    function increment(int &$value){
        $value++;
    }

    $count = 1;
   Increment($count);

   echo $count . PHP_EOL;

   // Returnign reference
   function &getValue(){
        static $value = 100;
        return $value;
   }    

   $a = &getValue();
   $a = 200;

   $other = &getValue();
   echo $other . PHP_EOL;

    
?>