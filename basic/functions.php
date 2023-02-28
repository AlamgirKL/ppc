<?php

// function 
declare(  strict_types =1);

function sum( float $a , float $b, int ...$nums) : float{
    $sum = $a + $b;

    return $sum;

    foreach ($nums as $num){
        $sum += $nums;
    }


}

echo sum(33, 11,2,4,5);