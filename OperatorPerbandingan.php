<!-- contoh operator perbadningan -->

<?php  
var_dump("10" == 10);

var_dump("10" === 10);

var_dump(10 > 9 );

var_dump(10 <= 10);

echo "-============-" . PHP_EOL;

$data = "data";
$info = "data";


$check  = strlen($data) == strlen($info);
var_dump($check . PHP_EOL);



?>