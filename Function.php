<?php 

function sayHello(){
    echo "Hello this is my first 'function' :)" . PHP_EOL;
}

sayHello();
sayHello();


// memanggil if didalam  function
$buat = true; // jika salah maka function dibawah tidak bisa tampil karena function yang didalam if tidak di eksekusi

if ($buat){
    function ifHello(){
        echo "Hello this is my if  'function' :)" . PHP_EOL;
    }
}

ifHello();

?>