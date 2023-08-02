<?php
echo "Ingrese una letra:";
$letra = readline();

echo match ($letra) {
    "a"=> "la letra ingresada es un vocal\n",
    "e"=> "la letra ingresada es un vocal\n",
    "i"=> "la letra ingresada es un vocal\n",
    "o"=> "la letra ingresada es un vocal\n",
    "u"=> "la letra ingresada es un vocal\n",
    default => "la letra ingresada es una consonante"
};

?>