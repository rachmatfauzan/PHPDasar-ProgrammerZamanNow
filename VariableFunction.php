<?php 




function foo(){
    echo "Foo". PHP_EOL;
}

function bar(){
    echo "Bar Bar" . PHP_EOL;
}

$FunctionYangAkanDiPanggil = "foo";
$FunctionYangAkanDiPanggil();

$FunctionYangAkanDiPanggil = "bar";
$FunctionYangAkanDiPanggil();


echo "########################". PHP_EOL;
// Penggunaan Variable Function
function sayHello(string $name , $filter){
    $finalName = $filter($name);
    echo "Nama Anda Telah di Konfersi menjadi - $finalName". PHP_EOL;
}

SayHello("Rachmat", "strtoupper");
SayHello("Rachmat", "strtolower");
?>