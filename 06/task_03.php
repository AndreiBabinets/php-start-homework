<?php
$digits = array(2, -10, -2, 4, 5, 1, 6, 200, 1.6, 95);
$digits = deleteNegtives($digits); 

print_r($digits);

function deleteNegtives($digits){
    foreach($digits as $key=>$value){
        if ($value<0) unset($digits[$key]);
    }
    return $digits;
}

?> 