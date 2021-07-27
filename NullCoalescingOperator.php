<?php 

// $data = [
//     "action" => "create"
// ];

$data = [
    "action" => "Isi Data"
]; 

if (isset($data["action"])){
    $action = $data["action"];
}else{
    $action = "Nothing";
}

echo $action . PHP_EOL;


// Syntax Alternatif
$data = [
    "body" => "Side_skirt"
];


// Null coalescingOperator
$action = $data["body"] ?? "Nothing";
echo $action . PHP_EOL;


$dataBaru = ["access"];
$check = $dataBaru['access'] ?? "nothing";
var_dump($check);







?>