<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Uso de echo y print
echo "Este es un ejemplo con echo.<br/>";
print "Este es un ejemplo con print.<br/>";

// Uso de printf con especificadores de formato
$modulo = "DWES";
$curso = 2;
$ciclo = "DAW";
printf("%s es un módulo de %d curso de %s<br/>", $modulo, $curso, $ciclo);

// Uso de sprintf para almacenar la salida en una variable
$pi = 3.1416;
$txt_pi = sprintf("El valor de PI es %.2f", $pi);
echo $txt_pi . "<br/>";

// Uso de print_r() para mostrar arrays
$frutas = array("manzana", "pera", "naranja");
print_r($frutas);

// Uso de var_dump() para mostrar arrays y objetos
var_dump($frutas);
?>