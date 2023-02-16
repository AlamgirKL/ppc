 <?php
// $age=$_GET['age'] ?? 0;
// $gender =$_GET['gender'] ?? '';

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
// $carlist =$_GET['carlist'] ?? '';


// $eligibleCarList = array_filter( explode("," , $carlist));
// // $echo = explode(',',$carlist);
// echo"<pre>";
// var_dump ($eligibleCarList);
// echo "</pre>";

// if(!empty($eligibleCarList) && count($eligibleCarList)==1){
//     echo " You are Eligible for insurance ";
// }else {
//     echo "Your are not <b>Eligible  </b> for  Insurance";
// }

// if(count($eligibleCarList) < 2){
//     echo "you are <b> Eligible</b> for insurance ." ;
// } else {
//   echo  "you are <b> Not Eligible </b> for insurance.";
// }
    
//============= switch case =======================
// $favcolor =  $_GET['color'] ?? "red";

// $valueforprint = '';
// switch ($favcolor) {
//     case "red";
//     $valueforprint = "Your favorite color is Red !";
//     break;
//     case "blue";

//     $valueforprint ="your favorit color is blue";
//     break;
//     case "green";

//     $valueforprint =" Your favorit color is Green";
//     break;
//     case "yellow" ;

//     $valueforprint = "Your favorit color is Yellow";
//     break;

//     default :
//     $valueforprint ="your favorit color is red , blue , or Green ! ";
    

// }

// echo $valueforprint;


//break for forloop 
$i=10;
for($i =0; $i < 10; $i++) {
    if($i==4){
        continue; // continue mens skip
    }

    if($i == 8){
        break;  // halt 
    }

    echo " Value is : " .$i."<br/>";
    print("<hr/>");
}
print("<hr/>");

$fruits = [
    "banana",
    "apple",
    "dragon "
    ,
    "orange",
    "mango",
    "jackfruit"
];

foreach ($fruits as $fruit)
{
    echo $fruit."<br/>";

}
print("<hr/>");
echo "another code block";

print("<hr/>");

$persons = [
   
    'name'=> 'kabir',
    'age'=>33,
    'email'=>'kaibr@gmail.com'
];


foreach ($persons as $key => $info){
    echo $key . "  : " .$info . " <br/>";// there will be no exception to be thrown.

}

print("<hr/>");print("<hr/>");

$datas = [
    [
          
    'name'=> 'kabir',
    'age'=>33,
    'email'=>'kaibr@gmail.com'
    ],
    [
          
        'name'=> 'lily',
        'age'=>33,
        'email'=>'lily@gmail.com',
        'address'=> 'Dhaka'
    ],
    [
          
        'name'=> 'lily',
        'age'=>33,
        'email'=>'lily@gmail.com',
        'address'=> " NY",
        'education_info'=> [
            'ssc'=> [
                'year'=> '2014'
            ]
        ]


        ]



 
];
// show the values of array in comma separated way 
foreach ($datas as $key => $data){
    // echo "Name :" .$data['name'];
    // echo " Age  : " .$data['age'];
    print("<hr/>");
    // echo " Person's info  :";
    // echo implode( " ," , $data) . "<br/>";

    // echo "Name  :" .$data['name']."<br/>";
    // echo " Age : " .$data['age']. "<br/>";
    // echo "Email : " .$data['email'] ."<br/>";

    // if(!empty($data['address'])) {

    //     echo "Address  : ". $data['address'] ." <br/>";
    // }
    echo "showing value of person " . $key . "<br/>";

 echo "<hr/>";



foreach ($data as $index=> $pre) {
    // if(is_array($pre)){
    // //    echo ucfirst ($index)   .':' . implode(',', $pre)."<br/>";
    // } else {
    //     echo ucfirst($index ). ':'.$pre . " <br/>";
    // }
    echo "showing value of person " . $key . "<br/>";

    foreach ($request->$pre as $keys => $show)
    {
        if(is_array($show)){
            echo ucfirst ($keys)   .':' . implode(',', $show)."<br/>";
         } else {
             echo ucfirst($keys ). ':'.$show . " <br/>";
         }
    }

}

}
?>