<?php
echo "Ingrese una numero del 1 al 12 :";
$letra = readline();

echo match ($letra) {
    "1"=> "enero\n",
    "2"=> "febrero\n",
    "3"=> "marzo\n",
    "4"=> "abril\n",
    "5"=> "mayo\n",
    "6"=> "junio\n",
    "7"=> "julio\n",
    "8"=> "agosto\n",
    "9"=> "septiembre\n",
    "10"=> "octubre\n",
    "11"=> "noviembre\n",
    "12"=> "diciembre\n",
    default => "el numero ingresada no es valido"
};
?>