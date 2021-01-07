<?php 
$counter = 1;

while($counter <= 10 ){
    echo "Ini Data ke-$counter" . PHP_EOL;
    $counter++;
}

$counter = 1;
while($counter <= 10 ):
    echo "Ini Data While ke-$counter" . PHP_EOL;
    $counter++;
endwhile;


?>