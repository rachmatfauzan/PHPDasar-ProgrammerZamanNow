<?php 

// dengan For untuk menamiplkan bilangan genap

for($counter = 1; $counter <=20; $counter++){
    if($counter % 2 == 1 ){
        continue;
    }
    echo "Hello ini adalah tampilan bilangan genap ke-$counter" .PHP_EOL;
}

?>