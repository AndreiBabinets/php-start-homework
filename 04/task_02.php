<?php
$a = 23;
$b = 2;
$c = -10;

$d = getD($a, $b, $c);

if ($d>0){
	$x1 = (-$b - sqrt($d))/(2*$a);
	$x2 = (-$b + sqrt($d))/(2*$a);
	echo "x1=$x1; x2=$x2";
} elseif ($d==0){
	$x = -$b/(2*$a);
	echo "x=$x;";
} else {
	echo 'Корней нет';
}


function getD($a, $b, $c){
	return $b^2-4*$a*$c;
}
?>