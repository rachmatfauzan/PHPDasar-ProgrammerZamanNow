<?php  

// menggunakan parameter array 

$values = array(1, 0, 2, 3.4);
var_dump($values);

$names = ["Aji", "Riski", "Jordi"];
// mengubah data sesuai urutan data index
$names[3] = "Lestaluhu";
// Menambahkan data di paling belakang
$names[] = "Rachmat";
var_dump($names);
var_dump(count($names));

// menghapus data 
unset($names[4]);
var_dump($names);

// Membuat Map dengan array 
// menggunakan parameter
$ajo = array (
    "id" => 1,
    "fullname" => "Rachmatfauzan",
    "address" => [
        "city" => "Batam",
        "country" => "Indonesia"
    ]
);
var_dump($ajo);
var_dump($ajo["fullname"]);

// Menggunakan kurung Kotak []
$budi = [
    "id" => 2.7,
    "fullname" => "Budi Setiawan Sejahtera",
    "address" => "Puskopkar"
];

var_dump($budi);

// akses index array didalam array
var_dump($ajo["address"]["country"]);




// menggunakan



  

?> 