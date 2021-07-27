<?php function sum(int $first, int $last)
{
    $total = $first + $last;
    return $total;
}

$result = sum(10, 10);
echo "Total = $result" . PHP_EOL;



// Contoh kasus

function getFinal(int $value)
{
    if ($value >= 90) {
        return "A";
    } else if ($value >= 80) {
        return "B";
    } else {
        return "E";
    }
}

// cuba function
$hasil = getFinal(88);
var_dump($hasil);


$hasilSwitch = getFinal(100);
var_dump($hasilSwitch);

/*
    Kolaborasi menggunakan switch 
*/

// switch($hasilSwitch){
//     case "B":
//         case "A":
//         echo "Kamu cukup pandai";
//         break;
//     default:
//         echo "Kamu mending belajar lagi" . PHP_EOL;
// }

if ($hasilSwitch == "A" || $hasilSwitch == "B") {
    echo "Good Job !!" . PHP_EOL;
} else {
    echo "Try again" . PHP_EOL;
}


// return tpye declaration


function hitungUmur(int $nilai1, int $nilai2): int //-> :int atau type declaration dapat digunakan ketika memiliki nilai bali || nilai return
{
    $total = $nilai1 + $nilai2;
    return $total;
}

$hasilUmur = hitungUmur(21, 12);

var_dump(hitungUmur(90, 10)); //melihat return value dengan var_dump

echo "----------------" . PHP_EOL;
echo "Jumlah dari umur Adi dan Umur Nina adalah = " . $hasilUmur . PHP_EOL;
