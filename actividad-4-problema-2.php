<?php
echo "Ingrese un color sea calido o no:";
$color = readline();
echo match ($color) {
    "violeta"=> "este color es frio\n",
    "azul"=> "este color es frio\n",
    "verde"=> "este color es frio\n",
    "rojo"=> "este color es calido\n",
    "naranja"=> "este color es calido\n",
    "amarillo"=> "este color es calido\n"
    
};
?>