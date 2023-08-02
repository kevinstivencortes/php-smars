<?php
$fecha =intval(readline("ingrese el dia\n"));
$mes =intval(readline("ingrese el mes\n"));
$año =intval(readline("ingrese el año\n"));

$resul= match (true) {
     $mes == 1 => "su mes es enero",
     $mes == 2 => "su mes es febrero",
     $mes == 3 => "su mes es marzo",
     $mes == 4 => "su mes es abril",
     $mes == 5 => "su mes es mayo",
     $mes == 6 => "su mes es junio",
     $mes == 7 => "su mes es julio",
     $mes == 8 => "su mes es agosto",
     $mes == 9 => "su mes es septiembre",
     $mes == 10 => "su mes es octubre",
     $mes == 11 => "su mes es noviembre",
     $mes == 12 => "su mes es diciembre",
     default => "numero incorrecto"
};
echo "su fecha es $fecha/$mes/$año y su mes es $resul"

?>