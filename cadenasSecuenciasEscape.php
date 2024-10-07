<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Secuencias de escape
echo "Esto es una línea\nNueva línea.<br/>";
echo "Esto es una tabulación:\tTabulado.<br/>";

// Uso de concatenación
$cadena1 = "Hola";
$cadena2 = "Mundo";
echo $cadena1 . " " . $cadena2 . "<br/>";

// Uso de comillas dobles y simples
$modulo = "DWES";
echo "<p>Módulo: $modulo</p>";
echo '<p>Módulo: $modulo (sin interpolación)</p>';
?>
