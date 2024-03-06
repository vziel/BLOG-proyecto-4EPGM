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
   "Calorias" => 225
   "Precio" => 104
   ];

$alimento4 = [
   "Nombre" => "Sandia fresca"
   "Calorias" => 30
   "Precio" => 60
   ];

$alimento5 = [
   "Nombre" => "Teriyaki bichente"
   "Calorias" => 456
   "Precio" => 278
   ];

$alimento6 = [
   "Nombre" => "aguas de jamaica,cebada,orchata,piña y naranja"
   "Calorias" => 145
   "Precio" => 38
   ];

$alimento7 = [
   "Nombre" => "Kool-aid Uva"
   "Calorias" => 130
   "Precio" => 55
   ];

$alimento8 = [
   "Nombre" => "Combo de palomitas y coca"
   "Calorias" => 580
   "Precio" => 240
   ];

$alimento9 = [
   "Nombre" => "Bubu lubbu"
   "Calorias" => 131
   "Precio" => 15
   ];

$alimento10 = [
   "Nombre" => "Enchiladas"
   "Calorias" => 127
   "Precio" => 258
   ];

$alimento11 = [
   "Nombre" => "Espaguetti"
   "Calorias" => 300
   "Precio" => 60
   ];

$alimento12 = [
   "Nombre" => "Ensalada"
   "Calorias" => 30
   "Precio" => 40
   ];

$alimento13 = [
   "Nombre" => "Cerial integral con almendras"
   "Calorias" => 276
   "Precio" => 289
   ];

$alimento14 = [
   "Nombre" => "Jugo de especies verdes"
   "Calorias" => 85
   "Precio" => 98
   ];

$alimento15 = [
   "Nombre" => "quesadillas con camarones"
   "Calorias" => 300
   "Precio" => 100
   ];

$alimento16 = [
   "Nombre" => "Milanesas"
   "Calorias" =>  265
   "Precio" => 189
   ];

$alimento17 = [
   "Nombre" => "Jambalaya"
   "Calorias" =>  109
   "Precio" => 198
   ];

$alimento18 = [
   "Nombre" => "Sushi"
   "Calorias" => 450
   "Precio" => 90
   ];

$alimento19 = [
   "Nombre" => "Ramen"
   "Calorias" => 100
   "Precio" => 130
   ];

$alimento20 = [
   "Nombre" => "Frijoles con Tortillas de Harina"
   "Calorias" => 300
   "Precio" => 145
   ];

$menu = [
   $alimento1,
   $alimento2,
   $alimento3,
   $alimento4,
   $alimento5,
   $alimento6,
   $alimento7,
   $alimento8,
   $alimento9,
   $alimento10,
   $alimento11,
   $alimento12,
   $alimento13,
   $alimento14,
   $alimento15,
   $alimento16,
   $alimento17,
   $alimento18,
   $alimento19,
   $alimento20,
];

echo json_encode($menu);

?>
