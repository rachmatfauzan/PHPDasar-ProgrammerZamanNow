<?php

// Memberikan argumen
function sayHello($name)
{                     // Argumen bisa lebih dari 1 ($variabel1, $variabel2)
    echo "Hello Lord $name" . PHP_EOL;
}

sayHello("Rachmat");
sayHello("Anto");


// Memberikan default argumen
function anonymous($name = "Anonymous")
{      // Membuat default Argument ($variabel1, $variabel2)
    echo "Hello Lord $name" . PHP_EOL;
}

anonymous();


// Type Declatration

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total = $total" . PHP_EOL;
}

sum(1500, 200);
sum("100", '200');
sum(true, false);


// default arguments
function helloCat(string $nameCat, string $lahir     = "September")
{
    echo "Hello kucingku : " . $nameCat . " & Lahir di bulan $lahir" . PHP_EOL;
}
helloCat("Pontin");

function hitungKucing(int $kloter1, float $kloter2)
{
    $kloterTotal = $kloter1 + $kloter2;

    echo "Jumlah kucing yang telah dilahrikan oleh manis ada : $kloterTotal" . PHP_EOL;
}
hitungKucing(3, 4);


// length variable 
function sumAll(...$values)
{

    $total = 0;
    foreach ($values as $data) {
        $total += $data;
    }

    echo "Total: " . implode('+', $values) . "= $total" . PHP_EOL;
}
sumAll(1, 4, 6, 8);

$umur = [3, 5, 7, 9];
sumAll(...$umur);
