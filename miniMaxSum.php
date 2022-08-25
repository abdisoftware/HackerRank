<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
    if (is_array($arr)) {
         //We count the array indices
         $CountTot =  count($arr);
    } else {
         echo "Error - Argument is not a valid array";
         return ;
    }
    
    sort($arr);
    
    $maxTot = array_sum($arr);
    
    for ($i=0; $i < count($arr); $i++) {
      
      $ResTotsum[] = $maxTot-$arr[$i];   
       
    }

   
    
    echo min($ResTotsum).' '.max($ResTotsum);
    
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
