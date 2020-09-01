<?php
$a = rand(0,100);
$b = rand(0,100);
$c = rand(0,100);

echo "<br>a=$a";
echo "<br>b=$b";
echo "<br>c=$c";
echo '<br>';
echo ((($a==$b) || ($a==$c) || ($b==$c)) ? 'Ошибка' : ($a + $b + $c)/3);
?>