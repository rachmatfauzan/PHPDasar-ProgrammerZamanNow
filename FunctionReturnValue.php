<?php 

function sum(int $first, int $last){
    $total = $first + $last;
    return $total; 
}

$result = sum(10, 10);
echo "Total = $result". PHP_EOL;



// Contoh kasus

function getFinal(int $value){
    if ($value >= 90){
        return "A";
    }else if($value >=80){
        return "B";
    }else{
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

if ($hasilSwitch == "A" || $hasilSwitch == "B"){
    echo "Good Job !!";
}else{
    echo "Try again";
}
