<?php
//Task:1
function printEvenNumbers() {
    for ($i = 1; $i <= 20; $i++) {
        if($i%2 ==0){

            echo $i . "\n";
        }
    }
}

// Call the function to print even numbers from 1 to 20
printEvenNumbers();



//Task:2

for($i=1;$i<=10; $i++){
    if ($i % 5 == 0) {
        continue; // Skip multiples of 5
    }

    echo $i . "\n";
}









?>