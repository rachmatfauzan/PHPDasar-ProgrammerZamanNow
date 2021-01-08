<?php 

$counter = 1;

while(true){
    echo "Ini Data ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter >20 ){
        break;
    }
}


?>