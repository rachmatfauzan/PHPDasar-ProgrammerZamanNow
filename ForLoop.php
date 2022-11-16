<?php 

//  Infinty Loop
// for(;;){
//     echo "Ini Adalah Perulangan" . PHP_EOL;
// }

// Perulangan dengan kondisi
for ($count = 10; $count >= 0 ; $count--){
    echo"Ini adalah perulangan ke-$count" . PHP_EOL; 
}

// Syntax Alternatif
for ($count = 1; $count <= 10 ; $count++):
    echo"Ini adalah perulangan ke-$count" . PHP_EOL; 
endfor;



for ($data=1; $data <= 5; $data++) : 
    $hasil = $data*3;
    echo "Hasil kali 3 dar $data x 3 = $hasil" . PHP_EOL;

endfor;


?>