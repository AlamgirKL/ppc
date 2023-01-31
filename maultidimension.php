<?php

$array= array (
    'fruts'=> array('orange', 'banna', 'apple',55),

    'frut'=> array('dfd', 'banndfda', 'appdfle')
);


$all = array('a' => 'b', 'b' => 'c', 'c' => 'd');

// echo array_search('c', $all);


$arra =array(array('p','h'), array('p', 'r'),'o');




// if(in_array(array('p','h'),$arra , true )){
//     echo "find Successfully";
// }else {
//     echo"can't find";
// }


echo "==================================<br/>";

$afruts = ['orange', 'banana', 'apple ', 'grapes'
];
    // index array 
$replace = [ '2'=>'pape', 'll'];  //asociative array

$new = array_replace($afruts, $replace);

echo "<pre>";
print_r($new);
echo "</pre>";


echo "<br/> =========================array_replace_recursive_Multidimentation_array==========================<br/>";

$arrayOne = array("a" =>array ("red"), "b"=> array("blue","yellow") , "c"=> ("green"));
$arraytwo = array("a"=>array ("black"), "b" =>array("tt"));

$newarray = array_replace_recursive($arrayOne , $arraytwo);

// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
echo "<br/> =========================array_pop_push_Multidimentation_array==========================<br/>";


$pop= ['orange' , 'bana', 'geeen ' , 'yellow ', 'appale'];

// array_pop($pop);

// array_push ($pop , 'orange','lemon');



        echo "<pre>";
        print_r($pop);
        echo "</pre>";

echo "<br/> ===array_shift_unshift_Multidimentation_array======<br/>";

// array_shift($pop);
array_unshift($pop, "lemon");

echo "<pre>";
print_r($pop);
echo "</pre>";   
        
        ?>
   
    