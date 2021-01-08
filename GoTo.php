<?php 

// Go To itu bisa Loncat2 dan tidak membaca baris code di bawah anatar a; -> a:
goto a;
echo "Hello World ! ";


a:
echo "ini Label A" .  PHP_EOL;


// Contoh penggunaan GoTo dalam loop

$counter = 1;

while (true){
    echo "Counter ke- $counter" . PHP_EOL;
    $counter++;

    if($counter >10 ){
        goto end;
    }
}



end:
echo "Perulangan habis" . PHP_EOL;
?>
