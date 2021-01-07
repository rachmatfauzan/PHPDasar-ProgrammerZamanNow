<?php 

// $data = [
//     "action" => "create"
// ];

$data = []; 

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

$action = $data["body"] ?? "Nothing";
echo $action . PHP_EOL;







?>