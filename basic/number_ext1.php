<?php
$a = 1;
$a++;

echo $a++ ."<br/>";
echo $a;
echo " <br/>";
echo ++$a;
echo " <br/>";
echo ++$a;



echo " <br/>";


$x = 20;

echo $x++;
echo "  increment valu <br/>";
echo $x;
echo " <br/>";
echo ++$x;

echo " <br/>";
echo $x++;
echo " <br/>";
echo $x;
echo " <br/>";
echo ++$x;
echo " <br/>";
echo ++$x;
echo " <br/>";

echo "Decrement Value <br/>";

echo $x--;
echo " <br/>";
echo $x;
echo " <br/>";
echo $x;
echo " <br/>";
echo "=============================== <br/>";

echo --$x;
echo " <br/>";
echo --$a;
echo " <br/>";


echo "check casting process <br/>";

$z= "5";
$y ='5.5';

echo (int) $y;
echo" <br/>";
$value = '3';
echo is_int($value);
echo is_int($z);
echo '<br/>';
echo $value === '3';
?>