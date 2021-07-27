<?php


// factorial loop
function hitung(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}
var_dump(hitung(5));


// factorial recursive
function factorialRecursive(int $value): int
{

    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));
$nilaiAwal = 2000;

for ($nilaiAwal; $nilaiAwal >= 1; $nilaiAwal--) {

    echo "Tampilan ke - $nilaiAwal" . PHP_EOL;
}
