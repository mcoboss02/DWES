<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Este script define constantes y usa funciones matemáticas.

define("PI", 3.1416);
define("GRAVEDAD", 9.8);

echo "El valor de PI es " . PI . "<br/>";
echo "El valor de la gravedad en la Tierra es " . GRAVEDAD . "<br/>";

// Calcular el área de un círculo
$radio = 5;
$area = PI * pow($radio, 2);
echo "El área de un círculo de radio $radio es $area<br/>";
?>