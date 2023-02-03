<?php
// $human = [
//     'personal_info' => [
//         'father_name' => '',
//         'mother_name' => '',
//         'dob' => '',
//         'nationality' => '',
//         'religion' => ''
//     ],

//     'academic_info' => [
//         'ssc' => [
//             'year' => '',
//             'gpa' => ''
//         ],
//         'hsc' => [
//             'year' => '',
//             'gpa' => ''
//         ],
//         'grauation' => [
//             'bsc' => [
//                 //
//             ],
//             'mce' => [
//                 //
//             ]
//         ]
//     ],
//     'professional_course' => [
//         //
//     ],


// ];


// echo "<pre/>";
// var_dump($human);

// ======================================

$student = [
    [


        'name' => 'john doe',
        'age' => 20,
        'email' => 'johon.ddo@gmail.com',
        'address' =>
        [
            'country' => 'Bd',
            'district' => 'Dhaka'
        ],
    ],
    [
        'name' => 'Lilly',
        'age' => 29,
        'email' => 'lily@gmail.com',
        'address' => [
            'country' => 'bd',
            'district' => 'Chitagong'

        ]
    ],

    [
        'name' => 'palak Mahmud',
        'age' => 18,
        'email' => 'palak@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Dhaka'
        ]
    ],
    [
        'name' => 'Hasan Ahmed',
        'age' => 19,
        'email' => 'hasan@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Barishal'
        ]
    ]
];


// foreach ($student as  $std) {

//     if($std["address"]["district"] == "Dhaka") {
//         echo $std["name"]."<br/>";
    
//     }
  
// }

foreach($student as $students){
   if($students["address"]["district"]=="Barishal"){
    echo $students["name"]."<br/>";
   }
}

// if($student["address"]["district"] == "Dhaka") {
//     echo $student["name"];
// }

// $info = $student[0]['address']['district'];
// $inf = $student[2]['address']['district'];
// // var_dump($inf);
// // echo $info;
// if(!isset($inf) == 0) {
//     echo $student[2]['name'];
// }else {
//     echo "nai";
// }

echo "===============================================<br/>";

// $k = array_search('Barishal', $student); // $key = 2;


// echo $k;

// $array =[  0 =>[

//     0 =>'blue', 
//     1 => 'red', 
//     2 => 'green', 
//     'name' => 'dd'

// ]
 


// ];

// $key = array_search('dd', $array); // only single arry working this solution
// // $key = array_search('red', $array);   // $key = 1;

// echo $key;


// ==================================================ok 

// while (($key = array_search("Dhaka", $student)) !== NULL)

// {

// //     while (($key = array_search("name", $student)) !== NULL){
// //         echo "name";
// //     }
// //     // echo $student[2]['name']; wrong method using 

// //  unset($student[$key]);

// }

// $people = array(
//     2 => array(
//       'name' => 'John',
//       'fav_color' => 'green'
//     ),
//     5=> array(
//       'name' => 'Samuel',
//       'fav_color' => 'blue'
//     )
//   );
  
//   $found_key = array_search('Dhaka', array_column($student, 'district'));
// print($found_key);


// $found_key = array_search('blue', array_column($people, 'fav_color'));
// $found_key = array_search('Dhaka', array_column($student, 'district'));
// var_dump($found_key);

// $search_value = 'Dhaka';

// $array_keymap = array_recursive_search_key_map($search_value, $student);
// var_dump($array_keymap);

// var_dump( array_search( 'address', $student ) );

// var_dump( array_search( 'address', $student, true ) );
// $key = array_search('Dhaka', array_column($student, 'address'));
// var_dump($key);

   
// $key = array_search('district', $student);

// if (!empty($key) || $key === 0) {
//     echo "ace";
// } else {
//     echo "nai";
// }
      
// if(isset($student    ) == ['district'] 'Dhaka' ){
//     echo "ace";
//      }else {
//     echo "nai";
//        }
    
    
// echo "<pre/>";
// var_dump($student);


?>