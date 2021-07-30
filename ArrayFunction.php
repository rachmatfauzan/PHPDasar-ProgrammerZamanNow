<?php 

$array = [10, 8, 6, 4, 2];

$dataResult = array_map(fn($array) => $array * 2 , $array);
var_dump($dataResult);

sort($array);
var_dump($array);

var_dump(array_keys($array));
var_dump(array_values($array));

$data = [
    'first name' => "Vira",
    'last name' => "Virara"
];
var_dump(array_keys($data));
var_dump(array_values($data));





?>