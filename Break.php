<?php 

$counter = 1;

while(true){
    echo "Ini Data ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter >5 ){
        break;
    }
}

// new Topics

echo "=============" . PHP_EOL;

$data = 1;

while(true){
    $hasil = $data*2;

    echo "Hasil perkalian $data * 2 = $hasil" . PHP_EOL;
    $data++;

    if ($hasil == 12){
        break;
    }
}


?>