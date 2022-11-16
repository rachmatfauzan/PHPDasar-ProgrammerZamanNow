<?php 


// Melakukan Perulangan array tanpa menggunakan foreach
$names = ['Rachmat', 'Fauzan', 'Chaniago'];

for ($i=0; $i < count($names); $i++){
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}


// cara menggunkaan foreach 
$address = ["bida ayu", " Blok T", "No 32"];


foreach ($address as $alamat){
    echo "data $alamat" . PHP_EOL;
}

// For Each dengan Key

$complete = [
    "nama" => "Rachmat Fauzan",
    "umur" => "21 Thn",
    "alamat" => "Bida Ayu Blok T No 32"
];

foreach ($complete as $key => $value) {
    echo "$key : $value" . PHP_EOL;

}
?>