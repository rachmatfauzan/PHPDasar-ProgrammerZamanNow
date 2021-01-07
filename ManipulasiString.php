<?php  

$name = "Rachmat Fauzan";
$author = "Nama Author : " . $name . PHP_EOL; // PHP_EOL itu = fungsinya seperti /n 
$born   = "Tgl/Thn Lahir : " . 05 . "-" . 10 . '-' . 1999 . PHP_EOL;

echo $author . $born;


// Manipulasi String
$valueString = (string)102.98;
var_dump($valueString);

$valueInt = (int)"123";
var_dump($valueInt);


// Mengakses Karakter 

$name = "Arifan";
echo $name[0] . PHP_EOL; // EOL = End Of Line
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;

// Variable Parsing
echo "Hello $name Selamat Mempelajari Bahasa Pemograman PHP" . PHP_EOL;

// Curly Brace -> Menambahkan string tanpa spasi di variable $
echo "Hello {$name}Sandewa Selamat Mempelajari Bahasa Pemograman PHP" . PHP_EOL;
?>