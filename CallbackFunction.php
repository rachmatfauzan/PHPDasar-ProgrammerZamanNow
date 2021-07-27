<?php 

function sayHello (string $name , callable $filter) {
     $namaFinal = call_user_func($filter, $name);
     echo "Perkenalkan nama saya $namaFinal" . PHP_EOL;
}

SayHello("Juwita", "strtolower") ;
// menggunakan anonymous function
SayHello("Juwita", function ($name):string {
    return strtoupper($name);
});
// menggunakan arrow function
SayHello("Fikri", fn($name) => strtolower($name) );

?>