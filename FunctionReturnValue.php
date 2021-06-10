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
$hasil = getFinal(70);
var_dump($hasil);

$hasil = getFinal(90);
var_dump($hasil);


?>