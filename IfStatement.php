<?php 

$matematika = 70;
$biologi = 90;

if($matematika >= 70 && $biologi >= 75){
    echo "Anda Lulus, Hore Anda Naik Kelas " . PHP_EOL;
} else{
    echo "Kacihan !! " . PHP_EOL;
}



// Membuat Pengkondisian else if
$pkn = 80 ;
$agama = 98 ;

if($pkn >= 90 && $agama >=90  ){
    echo "Nila Anda A " . PHP_EOL;
} else if($pkn >=80 && $agama >= 80){
    echo "Nilai Anda B " . PHP_EOL;
}else {
    echo "Nilai Anda E " . PHP_EOL;
}

// if statement dengan colon
// Membuat Pengkondisian else if
$pkn = 90 ;
$agama = 98 ;

if($pkn >= 90 && $agama >=90 ) :
    echo "Nila Anda A " . PHP_EOL;
 elseif($pkn >=80 && $agama >= 80) :
    echo "Nilai Anda B " . PHP_EOL;
else :
    echo "Nilai Anda E " . PHP_EOL;
endif;



// Kasus cash register conoth tambahan sendiri 

$total = 120000;

if ($total >= 50000) :
    echo "Silahkan Ambil Struk Anda, Total Belanja = Rp " .  number_format($total,2,".", ',') . PHP_EOL;
else :
    echo "Total belanja anda kurang dari Rp. 50.000,00- \n Total Belanja : Rp " . number_format($total,2,".", ',') . PHP_EOL;

endif;
?>