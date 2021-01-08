<?php  
// Membuat tipe data null
// Null => digunakan untuk menghapus nilai variabel yang ingin dihapus

$name = "RACHMAT";
$name = null;

$age = 50; //digunakan untuk menghapus data atau tidak 

echo $name;
echo $age;
echo "\n";

// Mengecek Data Null
// Untuk mengecek apakah data bernilai null atau tidak, kita bisa menggunakan => is_nul($namavariable);

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";


$name = "Fauzan";
echo "Apakah data nama masih kosong ? ";
var_dump(is_null($name));

// Untuk Menghapus sebuah variabel
// kita dapat menggunakan => unset($namavariabel);
unset($name); // <<=== UNSET
// echo $name;


// mengecek varibel
echo "Apakah Variabel umur ada ? : ";
var_dump(isset($age));
var_dump($age);




?>