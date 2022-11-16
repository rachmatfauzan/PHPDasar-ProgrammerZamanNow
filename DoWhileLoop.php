<?php 

$counter = 2;

do{
    echo "Percobaan Perulangan DoWhile ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);


// new topics 
$data = 100;

do{
    $hasil = $data-1;
 
    echo "hasil pengurangan data; $data - 1 = $hasil" . PHP_EOL;
    $data++;
}while ($data <=8)


?>