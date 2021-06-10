<?php 

// Memberikan argumen
function sayHello($name){                     // Argumen bisa lebih dari 1 ($variabel1, $variabel2)
    echo "Hello Lord $name". PHP_EOL;
}

sayHello("Rachmat");
sayHello("Anto");


// Memberikan default argumen
function anonymous($name = "Anonymous"){                     // Membuat default Argument ($variabel1, $variabel2)
    echo "Hello Lord $name". PHP_EOL;
}

anonymous();


// Type Declatration

function sum(int $first, int $last){
    $total = $first + $last;
    echo "Total = $total" . PHP_EOL;
}

sum("100", '200');
sum(true, false);


?>