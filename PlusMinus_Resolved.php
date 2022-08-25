<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
   
//we check that the argument is an array
   if (is_array($arr)) {
   	     //We count the array indices
		 $CountTot =  count($arr);
   } else {
   	  echo "Error - Argument is not a valid array";
   	  return ;
   } 

   //Initialize values
   $posi = $neg = $zero = 0;

   
   //Values are assigned to the variables, which represent the different values
   for($i = 0; $i < $CountTot; $i++){
       if($arr[$i] > 0){
           $posi++;
       }elseif($arr[$i] < 0){
           $neg++;
       }else{
           $zero++;
       }
   }

    //Formatted to floating point
   $_posi = (float) $posi/$CountTot;
   $_neg = (float) $neg/$CountTot;
   $_zero =  (float) $zero/$CountTot;
                             
    //Converts to 6-place decimals using PHP's number_format function
   $posi = number_format($_posi, 6, '.', '');
   $neg = number_format($_neg, 6, '.', '');
   $zero = number_format($_zero, 6, '.', '');

   //each variable is printed on its own line, according to instructions
   print($posi . "\n" . $neg . "\n" . $zero);  
    
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
