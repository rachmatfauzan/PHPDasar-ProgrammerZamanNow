<?php 

$nama = "pontin";

function sayHello(){
    global $nama;
    echo "Hallo $nama";
    var_dump($GLOBALS); 
}

sayHello();



?>