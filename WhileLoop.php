<?php 
$counter = 1;

while($counter <= 5 ){
    echo "Ini Data ke-$counter" . PHP_EOL;
    $counter++;
}

$counter = 1;
while($counter <= 5 ):
    echo "Ini Data While ke-$counter" . PHP_EOL;
    $counter++;
endwhile;

echo "=================" . PHP_EOL;

$data = 1;
while($data <= 10) : 
    $hasil = $data*2;
    echo "Hasil kali 2 dari : $data x 2 = $hasil" .PHP_EOL;

    $data++;
endwhile; 



?>