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

$mahasiswaIf = array (
    "nim" => "3311801036",
    "name" => "Tenia Nishi"
);

$cekNull = $mahasiswaIf["nim"] ?? "Tidak ada"; 

var_dump($cekNull) . PHP_EOL;







?>