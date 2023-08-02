<?php
$texto = readline("ingrese su texto \n");
 $cantidad = strlen($texto);
 $cantidad = match (true) {
  $cantidad >=25 =>"la cadena es larga\n" ,
  $cantidad >=5 =>"la cadena es mediana \n", 
  $cantidad >=15=>"la cadena es corta \n" 
 };
echo $cantidad
?>