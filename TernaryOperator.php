<?php 

// #######################33
$gender = "PRIA";
$hi = null;

if ($gender == "PRIA"){
    $hi = "Hi, bro!";
}else{
    $hi = "Hi, nona!";
}

echo $hi . PHP_EOL;

$hi = $gender == "PRIA" ? "Hello, sir" : "Hello, miss";
echo $hi . PHP_EOL;

// ######## -> Ternary Operator

// new Topics 
$totalBelanja=79740000;

$getDiscount = $totalBelanja >= 90000 ? "Selamat anda mendapatkan discount 20% dari Total Belanja = Rp " . number_format($totalBelanja,'2','.',',') : "Total belanja belum mencukupi syarat :(" ;

echo $getDiscount . PHP_EOL;


?>