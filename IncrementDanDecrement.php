<?php 

$a = 10;
$b = $a++; //nilai a akan masuk ke b terlebih dahulu lalu ditambah +1

$c = ++$a; //Nilai c akan ditambah terlebih dahulu lalu dimasukan nilai a kemduian

var_dump($b);
var_dump($c)

// ! Notice
// ini semua kaan berpengaruh jika rachmat menggunakan increment/decrement untuk variabel lain 
// tetapi jika untuk menaikan 1 variable tidak berpengaruh ++$a || $a++ duluan, TERSERAH 







?>