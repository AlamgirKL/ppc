<?php

//arthmatic operation 

// substraction 

// miltiplicaton  

// Devision 

// modulas

declare(strict_types=1);
declare(strict_types=1);

declare(strict_types=1);


#camelCase --- variable
#snake_case --- Variable

# PasscalCase  ---- ClassName





$value = 4;

$value_one = 30;

$sub = $value+$value_one;

// echo $value  + $value_one.PHP_EOL;

// echo "we will do artithmatic operation "."in this file.<br/>";
echo nl2br("we will do artithmatic operation "."in this file".PHP_EOL);


// echo nl2br("Additon of value 1 ". "in this file .".PHP_EOL );

echo "value  one $value <br/>";
echo " Value two $value_one <br/>";


echo " Adition total  of value : $sub"."<br/>";


echo"=================================<br/>"; 

$value3= "kabir";

echo " All  $value3 and $value_one and $value Tottal Valeu of submition "."<br/>";

echo "$sub";




echo " Aditional ${value}s ${value_one}s Additon ${sub} <br/>";

echo ' All Additional of '. $value. 's and '.$value_one. 's total nubmer '.$sub ."<br/>";


$substraction = $value-$value_one;

echo " $substraction";

echo "Abs value of the substraction  result is : " .abs($substraction). "<br/>";
echo " ========== multipication ======================= <br/>";

$valueone= 2;

$result = $value * $valueone;

echo "Multiplication result  of : " .abs($result);


echo"============Mudulas ============="."<br/>";

$mvalue= 58;
$mvalutwo = 9;

$mod = $mvalue % $mvalutwo;

 echo " Modulas  is  $mvalue  and $mvalutwo  is Result : $mod"."<br/>";


 echo "===========Divition ========== <br/>";

 $val = 5;

 $vald = 0;



 



if($vald == 0 ){
    $vald =1 ;

    $re= $val /$vald;
}
    




 echo " Divition Result of  $val and $vald  out put result $re <br/>";

 echo "Test" ."<br/>" ;
 



 





 $in =1.2;


 echo $in. "Type(expeced: String )" .gettype($in);

 echo "<br/>=========================================== <br/>";

$amount=234655345348999.566;
echo" Bd tk  " .number_format ($amount,2 ) .'BDT';

echo "<br/>";

$intll = 3564566535.89765;
echo" number " .number_format($intll,2 );


 ?>


<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

<!-- Number  -->

<div>
    <label for="num1">Number One</label>
    <input type="number" name="nau1" id="num1">

</div>

<div>
    <label for="num2">Number twone</label>
    <input type="number" name="num2" id="num2">
    
</div>

<div>
    <label for="result">result result</label>
    <input type="number" name="result" id="result">
    
</div>


<div>
    <input type="submit" value ="add" name ="operation">
    <input type="submit" value ="add" name ="operation">
    <input type="submit" value ="add" name ="operation">
    <input type="submit" value ="add" name ="operation">
    <input type="submit" value ="add" name ="operation">
</div>
</form>




<?php 

if(isset($_GET['oparation'])){
    $x =$_GET['num1'];
    $y =$_GET['num2'];
    $op =$_GET['oparation'];

    switch($op){
        case 'add': $esult = $x + $y;
          
            break;

        case 'sub': $result = $x-$y;
            # code...
            break;

        case 'mul': $result = $x*$Y;

            # code...
            break;
        case 'div': $result =$x /$Y;
            # code...
            break;
        case 'mud': $result = $x % $y;
            # code...
            break;

    }
} 

?>


if(isset($_GET['oparation'])){
    $x =$_GET['num1'];
    $y =$_GET['num2'];
    $op =$_GET['oparation'];

    switch($op){
        case 'add': $result = $x + $y;
          
            break;

        case 'sub': $result = $x-$y;
            # code...
            break;

        case 'mul': $result = $x*$Y;

            # code...
            break;
        case 'div': $result =$x /$Y;
            # code...
            break;
        case 'mud': $result = $x % $y;
            # code...
            break;

    }
} 

?>