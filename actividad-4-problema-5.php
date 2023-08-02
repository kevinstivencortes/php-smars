<?php
echo "Ingrese una numero del 1 al 7 :";
$letra = readline();

echo match ($letra) {
    "1"=> "lunes\n",
    "2"=> "martes\n",
    "3"=> "miercoles\n",
    "4"=> "jueves\n",
    "5"=> "viernes\n",
    "6"=> "sabado\n",
    "7"=> "domingo\n",
    default => "el numero ingresada no es valido"
};

?>