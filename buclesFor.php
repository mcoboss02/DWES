<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Este script imprime números en la misma línea y con formato usando HTML.

echo "<p>Números del 1 al 5:</p>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br/>";

// Ejemplo con salto de línea y tabulaciones
echo "<pre>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "\n";
}
echo "</pre>";
?>