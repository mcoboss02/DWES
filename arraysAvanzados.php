<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Arrays avanzados

// Arrays para trabajar
$array1 = array(3, 1, 2);
$array2 = array("C", "A", "B");

// Ordenar varios arrays
array_multisort($array1, $array2);
print_r($array1);
print_r($array2);

// Unir arrays
$merged_array = array_merge($array1, $array2);
print_r($merged_array);
?>