<?php
function printFibonacci($count) {
    $num1 = 0;
    $num2 = 1;

    for ($i = 0; $i < $count; $i++) {
        if ($i == 0) {
            echo $num1;
        } else {
            echo ", " . $num2;
            $nextNum = $num1 + $num2;
            $num1 = $num2;
            $num2 = $nextNum;
        }
    }
}

// Call the function with a count of 15 to print the first 15 Fibonacci numbers
printFibonacci(15);
?>