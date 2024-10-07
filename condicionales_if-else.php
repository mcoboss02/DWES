<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Este script muestra cómo usar condicionales anidados y operadores ternarios.

$numero = 8;

if ($numero > 10) {
    echo "$numero es mayor que 10<br/>";
} elseif ($numero == 10) {
    echo "$numero es igual a 10<br/>";
} else {
    echo "$numero es menor que 10<br/>";
}

// Operador ternario
echo ($numero % 2 == 0) ? "$numero es par<br/>" : "$numero es impar<br/>";
?>