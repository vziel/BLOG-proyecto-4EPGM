<?php

$alimento1 = [
   "Nombre" => "Hamburguesa"
   "Calorias" => 300
   "Precio" => 113
   ];

$alimento2 = [
   "Nombre" => "Pizza"
   "Calorias" => 266
   "Precio" => 25
   ];

$alimento3 = [
   "Nombre" => "Pollo frito"
   "Calorias" => "225"
   "Precio" => 104
   ];

$alimento4 = [
   "Nombre" => "Sandia fresca"
   "Calorias" => "30"
   "Precio" => 60
   ];


$menu = [
   $alimento1,
   $alimento2,
   $alimento3,
   $alimento4,
   ]
   
echo json_encode($menu);

?>
