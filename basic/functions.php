<?php

// function 
declare(  strict_types =1);

function sum( float $a , float $b, int ...$nums) : float{
    $sum = $a + $b;

    return $sum ;

    $string = '';

    foreach ($nums as $num){
        $sum += $nums;
        
    }


}

echo sum(33, 11,2,4,5) ."<br/>";

function summation(...$numbers){
    $string = '';

    foreach( $numbers as $number)
{
    $string.= $number;
}

return $string . "<br/>";
}

echo summation ( 'abcd','b','d','f','k');

$numberList = [ 12, 13,14,15,16,17, 5,22,11,9];
$factor = 5 ; 

$multiples = array_filter($numberList , function ($nc) use  ($factor){
    return $nc % $factor == 0;
});

echo " Multipules  of $factor\n";

echo "<pre>";
print_r($multiples);
echo "</pre>"; // call back function

$t = " name ";
$tr = " kabir";
 $t.= $tr;

 echo $t;  //String Operators
