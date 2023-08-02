<?php
$numero= intval(readline("ingrese un numero del 1 al 5\n"));

$resul= match ($numero) {
   1=> "su numero fue 1",
   2=> "su numero es 2",
   3=> "su numero es 3",
   4=>  "su numero es 4",
   5=> "su numero es 5",
    default=>"numero invalido" 
};
echo $resul

?>