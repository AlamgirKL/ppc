<html>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

<!-- <div>
    <label for="Input"> Enter Number 2</label>
    <input type="number" name ="num1" id="totalAmt" >

</div> -->
<div>
       <label for="totalAmt1"> Enter Number </label>
       <input type="number" name="num1" id="totalAmt1" step="0.01">

</div>

<div>
       <label for="totalAmt"> Enter Number 2</label>
       <input type="number" name="num2" id="totalAmt" step="0.01">

</div>







   

    <select name="operation" id="">
        <option value="add">add</option>
        <option value="sub">sub</option>
        <option value="mult">mul</option>
        <option value="div">divetion</option>
        <option value="mu">Muldulas</option>
    </select>
<div>

<div>
    <input type="submit" value="submit"  name="submit"class="app-form-button">
    <div>


    
<div>
  



</div>
        <p>
            <?php 
                if (!isset($_POST['submit']) == 0  ) {
                echo "enter number: ";

                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 =0;
                $num4=0;


                // if(isset($_POST['submit']) && !empty($_POST['submit'])) 


            // if (!isset($_POST['submit']) && empty($_POST['submit']) ){

            //         echo "plase input  number";
            

                $operation = $_POST['operation'];

                switch($operation){
                    case "add":
                        $sum = $num1 + $num2; 
                        
                   
            
                   
                        
                        echo "The additon of two number is addition :  ".number_format($sum,2);
                        
                        break;
                    
                    case "sub" :  $sum = $num1 - $num2;
                        
                        echo "The additon of two number is substraction : {$sum}";
                        break;
                    case "mult" :  $sum = $num1 * $num2;
                        
                        echo "The additon of two number is multipication : {$sum}";
                        break;
                    case "div" :  $sum = $num1 / $num2;
                        
                        echo "The additon of two number is division : {$sum}";
                        break;
                    case "mu" :  $sum = $num1 % $num2;
                        
                        echo "The additon of two number is Mudulas : {$sum}";
                        break;

                    

                    default:
                        echo "sorry for that";
                        break;

                    }
                }
            // }
               
            ?>
        </p>

    </div>


</div>
</form>
</html>
<!-- // with out error handlin calculotor  -->

