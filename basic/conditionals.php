<?php
$age=$_GET['age'] ?? 0;
$gender =$_GET['gender'] ?? '';

// if(($age >= 21 && $gender >= 'male') || ($age >= 18 && $gender == 'female') ){
//     echo " You are eligible for marrige according to bd low ";
// } else {
//     echo " you are not eligible for marrige according to bd low ";
// }

// if ($age >=18 && $gender == 'female'){
//     echo  "You Are Eligible for Marrige Accordin to BD Low";
// } elseif( $age >=21 && $gender == 'male' ){
//     echo" You are  <b> Eligible</b> for marrige accrodin to Bd Low";
// } else {
//     echo "Yor are Not Eligible For Marrige Accrodin to BD Low ";
// }

// smae condation

// $carlist = 'toyota,bmw,honda';
$carlist =$_GET['carlist'] ?? '';


$eligibleCarList = array_filter( explode("," , $carlist));
// $echo = explode(',',$carlist);
echo"<pre>";
var_dump ($eligibleCarList);
echo "</pre>";

if(!empty($eligibleCarList) && count($eligibleCarList)==1){
    echo " You are Eligible for insurance ";
}else {
    echo "Your are not <b>Eligible  </b> for  Insurance";
}

// if(count($eligibleCarList) < 2){
//     echo "you are <b> Eligible</b> for insurance ." ;
// } else {
//   echo  "you are <b> Not Eligible </b> for insurance.";
// }
    




?>