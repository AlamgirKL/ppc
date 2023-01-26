
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

<!-- Number  -->

<div>
    <label for="num1">Number One</label>
    <input type="number" name="num1" id="num1" >

</div>

<div>
    <label for="num2">Number twone</label>
    <input type="number" name="num2" id="num2" >
    
</div>

<div>
    <label for="result">result result</label>
    <input type="number" name="result" id="result" value="<?php $result ?>" disabled>
    
</div>


<div>
    <input type="submit" value ="add" name ="op1" id="add">
    <input type="submit" value ="sub" name ="ope2">
    <input type="submit" value ="mul" name ="ope3">
    <input type="submit" value ="div" name ="ope4">
    <input type="submit" value ="mud" name ="ope5">
</div>

<div>
    <input type="number" value="<?= $result ?>">
</div>
</form>




<?php

// $x = $_GET['num1'];
// $y = $_GET['num2'];
// echo "Sum : ", $result= $x + $y;
// echo "Sum : ", $x - $y;
// echo "Sum : ", $x * $y;
// echo "Sum : ", $x / $y;
// echo "Sum : ", $x % $y;


    
   

    if (isset($_POST['op1'])) {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $result = $n1 + $n2;
        echo "$result";
    } elseif (isset($_POST['ope2'])) {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $result = $n1 - $n2;
        echo "$result";
} elseif (isset($_POST['ope3'])) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $result = $n1 * $n2;
    echo "$result";
}
elseif (isset($_POST['ope4'])) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $result = $n1 / $n2;
    echo "$result";
}
elseif (isset($_POST['ope5'])) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $result = $n1 % $n2;
    echo "$result";
}

 
    

    //  if (isset($_POST['ope2'])) {
    //     $n1 = $_POST['num1'];
    //     $n2 = $_POST['num2'];
    //     $result = $n1 - $n2;
    //     echo "$result";
       
    // }
    // if  (isset($_POST['ope3'])) {
    //     $n1 = $_POST['num1'];
    //     $n2 = $_POST['num2'];
    //     $result = $n1 * $n2;
    //     echo "$result";
       
    // }



    


?>





