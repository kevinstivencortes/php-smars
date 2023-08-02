<?php
echo "Ingrese un número del 1 al 3:";
$numero = readline();
echo match ($numero) {
    "1"=> "este es el numero 1\n",
    "2"=> "este es el numero 2\n",
    "3"=> "este es el numero 3\n"
};

?>