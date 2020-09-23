<?php
$products = array(
	array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
	array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
	array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2)
	);

$price = 0;
$quantity = 0; 

getCountPrice($products);

echo "Сумма: $price <br>";
echo "Каличество: $quantity <br>";

function getCountPrice($shoppingBasket){
  
  global $price, $quantity;
  
  foreach($shoppingBasket as $key=>$value){
      if (is_array($value)){
          getCountPrice($value);
          
      } else {
              if ($key=='price'){$price+=$value; }
              if ($key=='quantity'){$quantity+=$value; }
            }         
    }
}

?> 