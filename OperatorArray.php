<?php  

$first = [
    "first_name" =>  "Rachmat"
];

$last = [
    "last_name" => "Fauzan"
];
var_dump($first + $last);


// 
$a = [
    "first_name" => "Rachmat",
    "last_name" => "Fauzan"
];

$b = [
    "last_name" => "Fauzan",
    "first_name" => "Rachmat"
];

var_dump($a == $b);

var_dump($a === $b);





?>