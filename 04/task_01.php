<?php
const MIN = 10;
const MAX = 50;

$x=-2;
inRange($x);

$x=0;
inRange($x);

$x=10;
inRange($x);

$x=20;
inRange($x);

$x=50;
inRange($x);

$x=150;
inRange($x);

function inRange($x){
	echo '<br>' . ((($x>MIN) && ($x<MAX)) ? '+' : ((($x==MIN) || ($x==MAX))? '+-' : '-'));
}
?>