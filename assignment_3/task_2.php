<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];

function removeEvenNumber($array){
    return array_filter($array,function($value){
            return $value % 2 != 0;
    });
}

print_r(removeEvenNumber($numbers));

?>