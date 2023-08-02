<?php
echo "Ingrese tu calificacion:";
$letra = readline();

echo match ($letra) {
    ""=> "lunes\n",
    "2"=> "martes\n",
    "3"=> "miercoles\n",
    "4"=> "jueves\n",
    "5"=> "viernes\n",
    "6"=> "sabado\n",
    "7"=> "domingo\n",
    default => "el numero ingresada no es valido"
};
?>