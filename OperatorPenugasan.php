<?php  

$total =  0;

$jeruk = 3000;
$ayam = 15000;
$capcin = 5000;


$total += $jeruk;
$total -= $capcin;
$total += $ayam;
var_dump("Rp ".number_format($total, '2', '.', ','));



?>