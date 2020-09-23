<?php

printSolution(getEquationSolution(23, 2, -10));
printSolution(getEquationSolution(3, -2, 1));
printSolution(getEquationSolution(1, 2, 1));

function getEquationSolution($a, $b, $c=0){
   $d = getD($a, $b, $c); 
   if ($d>0){
	    $x1 = (-$b - sqrt($d))/(2*$a);
	    $x2 = (-$b + sqrt($d))/(2*$a);
	    $solution = array('x1' => $x1, 'x2'=> $x2);
    } elseif ($d==0){
	    $x = -$b/(2*$a);
	    $solution = $x;
    } else {
	    $solution = false;
    }
    return $solution;
}

function getD($a, $b, $c){
	return $b*$b-4*$a*$c;
}

function printSolution($solution){
    if (is_array($solution)){print_r($solution);}
    elseif ($solution !== false) {echo $solution . '<br>';}
    else {echo 'false' . '<br>';}
}

?> 