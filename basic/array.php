<?php 

// index arry 
// associative arry 

// multi-dimentional arry 


// $frults_1 = "banana";
// $fruit_2 = " apple";
// $fruit_3 = " orange";


// $array = [
//     0=>"appale" , 
//     1=>"banana" , 
//     2=>"orange" , 
//     3=>"jeckfrood"];

// $per = [
//         1=>"appale" , 
//         2=>"banana" , 
//         3=>"orange" , 
//         4=>"jeckfrood"];


// echo "<pre> ";
// array_unshift($array, 'Mango');
// var_dump($array);
// echo "</pre>";

// echo "<pre> ";
// var_dump($per);
// echo "</pre>";

//  echo "associative arry  ================<br/> ";

// $person =[
//     'name' => 'Alamgir kabir',
//     'age'=> 23,
//     'email' => 'alamgirkabir45@gamil.com',
//     'address' => 'Dhaka'
// ];

// echo "<pre/>";
// var_dump($person);
// echo 'Person Address : ' . $person['address'];
// echo 'Person\'s Name  : ' . $person['name'] . '<br>';

// echo "Fruit  Name   : " . $per['1']."<br>";

echo "========multi Dimeention Array  ======= <br/> ";


// $kabirL = [
//     0=>"kabir" , 
//     1=>"mirpur" , 
//     'male'=>"mail" , 
//     'post'=>"dhaka"];


// //     if(isset($kabirL['name'])){
// //     $kabirL['name'] = $kabirL['name'];
// //     }else {
// //     $kabirL['name'] = 'Not defind Name Please Defiend';
// //     }




// // echo "Person  name : " . $kabirL['name'].'<br>';


// if(!isset($kabirL['Name'])){
//     $kabirL['Name']= 'nul';
// }
// echo "person  Name : " . $kabirL['Name']."<br>";


// $kabirL['ame'] = isset($kabirL['ame']) ? $kabirL['ame']:'nul please Defiend';

// // echo "Person  Name : " . $kabirL['ame']."<br>";

// // $kab= $kabirL['adddress']=  $kabirL['address']?? null;// nul

// $kabirLi['Namekoi'] ??=null; // null coalescing assignment operato

// $kabirLoo['nametwo'] ??= null;// null coalescing operator
// // echo "person  Name : " . $kabirL['Nameko']."<br>";

// // echo "person  Address : " . $kab['address']."<br>";

// // var_dump($kab);

// echo "<pre> ";

// var_dump($kabirLi);

// var_dump($kabirL);


// echo "========multi Dimeention Array  ======= <br/> ";

// $persons = [
//     0 => [
//         'name' => 'Lilly',
//         'age' => '20',
//         'email' => 'lilly@gmail.com'
//     ],

//     1 => [
//         'name' => 'kabir',
//         'age' => '20',
//         'email' => 'lilly@gmail.com'
//     ]

// ];


// echo "== Initiate MOM Doctor Strange == <br/>";
// echo "<pre/>";
// var_dump($persons);


// $persons['2'] =[
//     'name'=>'sumon',
//     'age'=> 22,
//     'mail'=> 'sumon34@gmail.com',
//     'address'=> 'Trishal'
// ];

// echo "== Initiate MOM Doctor Strange == <br/>";

// $persons[1]['age'] = 29;
// echo "<pre/>";
// var_dump($persons);



$human = [
    'personal_info' => [
        'father_name' => '',
        'mother_name' => '',
        'dob' => '',
        'nationality' => '',
        'religion' => ''
    ],

    'academic_info' => [
        'ssc' => [
            'year' => '',
            'gpa' => ''
        ],
        'hsc' => [
            'year' => '',
            'gpa' => ''
        ],
        'grauation' => [
            'bsc' => [
                //
            ],
            'mce' => [
                //
            ]
        ]
    ],
    'professional_course' => [
        //
    ],


];


$human['bank_info']['mfs']['bkash'] = [
    'account_no' => '',
    'account_name' => ''
];
$human['bank_info']['mfs']['nagad'] = [
    'account_no' => '',
    'account_name' => ''
];
$human['bank_info']['mfs']['city_bank'] = [
    'account_no' => '',
    'account_name' => '',
    'branch'=>''
];
$human['bank_info']['ba']['scb'] = [
    'account_no' => '',
    'account_name' => '',
    'branch'=>''
];


echo "===== Complete info of human ======= <br/>";
echo "<pre/>";
var_dump($human);



echo "============Kabir Array info ===================<br/>";


$Limon ['educaton'] = [
   
    'academy' => [

        'name' => 'JSC',
        'board' => 'Dhaka',
        'year' => '2012',
        'institute' => 'kalir bazar High school',

        'Cgpa' => '4.4'

    ],
    

    [
        'name' => 'ssc',
        'board' => 'Dhaka',
        'year' => '2019',
        'institute' => 'Mangoup'
        ,
        'Cgpa' => '2.9'
    ]


];

$Limon['educaton'] []=  [
    
        'name' => 'psc',
        'board' => 'Dhaka',
        'year' => '2014',
        'institute' => 'kalir bazar High school'
        ,
        'Cgpa' => '4.1'
   
    ];

echo "===============================Limon ===============array ===========<pre/>"."<br/>";
var_dump($Limon);
?>