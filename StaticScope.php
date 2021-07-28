<?php 

function increment(){
     static $counter = 1; 

    echo "Counte ke - $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();


?>