<?php

$menuItem = array('Кнопка 10', 'Кнопка 9', 'Кнопка 8', 'Кнопка 7', 'Кнопка 6', 'Кнопка 5', 'Кнопка 4', 'Кнопка 3', 'Кнопка 2', 'Кнопка 1');

$menuItem = array_reverse($menuItem);

echo '<ul>';
foreach($menuItem as $item){
	echo '<li><a href="#">' . $item . '</a></li>';
}
echo '</ul>';

?>