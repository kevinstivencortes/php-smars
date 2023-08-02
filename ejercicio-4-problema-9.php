<?php
$hora=intval(readline("ingrese su hora en HH:MM\n"));
$pais=  intval(readline("ingrese la franja horaria que desea saber\n"));
$suma = ($hora+100);
$suma2= ($hora+200);
$suma3= ($hora+300);
$suma4= ($hora+400);
$resul= match ($pais) {
    1 => "en alemania son las $suma " ,
    2 => "en ucranea son las $suma2",
    3 => "en catar son las $suma3",
    4 => "en armenia son las $suma4"
};
echo $resul


?>
