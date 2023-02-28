<?php 
declare (strict_types=1 );
// declare (strict_types = 1);
// This is called function
// function show_welcome_user()
// {
//     //
// }

// $user = new User();// object of User Class 
// $user -> getUser();


// class User
// {
//     // this is called method
//     public function  getUser(){
//         //
//     }
// }


// regular function
// defintion Part
function show_welcome_user($userName)
{
    return "Hi" .$userName."<br/>";
}

// calling part
// $userper = $_GET['username'] ?? 'no one ';
// echo show_welcome_user ($_GET['username']?? 'no one');// as a parameter , it called argument
//  echo show_welcome_user($userper);

// echo show_welcome_user ($userper);

echo show_welcome_user($_GET ['username'] ?? 'No one ');


echo sum (3,5);
echo "<br/>";

echo sum(5,8);
echo "<br/>";
// echo sum(5, "2");

echo "<br/>";

// echo sum (55 , 'a');


function  sum (int $a, int $b) : float // all intger number add folat but when declear int we can not declear float

{
// function  sum ( $a,  $b){ // reliable 

    var_dump  ($a ,$b);
    // var_dump ($b);
  $result = $a + (int)$b; // do the addition 

//   return 'result is : ' .$result ."<br/>"; // string does not return


  return $result;
}

$totalResult = 0 ;

for ($i = 0 ; $i < 10 ; $i ++ ) {
    // echo sum ( $i , $i + 2);
    $totalResult += sum ($i , $i+2);
    // $totalResult = $totalResult + sum( $i , $i + 2);
}
// for ($i = 0 : $i < 10 ; $i++ ){
//     $totalResult += sum ($i , $i+2);
// }   
 
//  var_dump ($totalResult);
echo  " Total Result  :  " .$totalResult ;

?>   