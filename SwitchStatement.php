
<?php 
$nilai = "B";
switch ($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
        case "c":
            echo "Anda lulus dengan bagus" . PHP_EOL;
            break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
}

echo PHP_EOL. "===================" . PHP_EOL;

// Syntacx Alternatif
$tampan = true;

switch ($tampan) :
    case true:
        echo "Anda Terlalu  Tampan";
        break;
    default:
        echo "Maaf, Anda Tidak Tampan heheheh";
endswitch;
echo PHP_EOL. "===================" . PHP_EOL;


?>