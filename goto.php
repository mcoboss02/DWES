<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Uso de goto
$a = 1;
goto salto;
$a++;  // Esta línea se saltará
salto:
echo "El valor de \$a es: " . $a;
?>
