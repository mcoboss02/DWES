<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Este script muestra cómo funcionan los parámetros por valor y por referencia.

function suma($a, $b) {
    return $a + $b;
}

// Función que modifica la variable original usando referencia
function incrementar(&$num) {
    $num++;
}

echo "Suma: " . suma(5, 10) . "<br/>";

$numero = 5;
incrementar($numero);
echo "Después de incrementar: $numero<br/>";
?>