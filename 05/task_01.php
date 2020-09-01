<?php
const MIN=1;
const MAX=25;

$sum=0;
for ($i=MIN;$i<=MAX; $i++){
	$sum+=$i;
}
echo "1-й способ цикл 'for' сумма равна: $sum";

$i=MIN;
$sum=0;

while ($i<=MAX){
	$sum+=$i;
	$i++;
}
echo "<br>2-й способ цикл 'while' сумма равна: $sum";
?>