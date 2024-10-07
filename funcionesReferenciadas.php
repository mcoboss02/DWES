<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Funciones referenciadas

function agregarValor(&$array) {
    $array[] = 100;
}
$miArray = [1, 2, 3];
agregarValor($miArray);
print_r($miArray); // [1, 2, 3, 100]
?>