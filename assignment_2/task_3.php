<?php
function calculateFibonacci($n) {
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return calculateFibonacci($n - 1) + calculateFibonacci($n - 2);
    }
}

$limit = 10;
$breakValue = 100;

for ($i = 0; $i < $limit; $i++) {
    $fibonacciNumber = calculateFibonacci($i);
    
    if ($fibonacciNumber > $breakValue) {
        break;
    }
    
    echo $fibonacciNumber . "\n";
}
?>