<?php


$sayHello = function (string $name) {
    echo "Hello Kang - {$name} " . PHP_EOL;
};

$sayHello("Reza");

echo "--------" . PHP_EOL;

function sayGoodBye(string $name, $filter)
{
    $endName = $filter($name);
    echo "Sampai Jumpa Kembali $endName ./." . PHP_EOL;
}

$transformText = function ($name): string {
    return strtolower($name);
};


sayGoodBye("Aji Hidayat", $transformText);

echo "---- Mengakses Varibel Luar ---" . PHP_EOL;

$pemilikHp = "Andik Firmansyah";
$merkHp = "Infinix";


$kataPati = function () use ($pemilikHp, $merkHp) {
    echo "Nama Pemilik dari hp $merkHp adalah $pemilikHp";
};

$kataPati();
