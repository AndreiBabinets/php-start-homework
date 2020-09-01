<?php
/*

Задача 1: Типы переменных
Определите типы следующих переменных и выведите их на экран:
$a = 152;
$b = '152';
$c = 'London';
$d = array(152);
$e = 15.2;
$f = false;
$g = true;

*/

/*
насколько мне известно в php нет строгой типизации
но начиная с версии 4 есть функция  - gettype
(прикольно - до решения теста даже необходимости небыло проверять тип)

*/

$a = 152;
$b = '152';
$c = 'London';
$d = array(152);
$e = 15.2;
$f = false;
$g = true;

$arr = array('a'=>$a, 'b'=>$b, 'c'=>$c, 'd'=>$d, 'e'=>$e,'f'=>$f,'g'=>$g);

foreach ($arr as $key => $value) {
  echo '<br>$' . $key  .' is type ' . (gettype($value)=='double'? 'float': gettype($value));
}

?>