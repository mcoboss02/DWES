<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Este script trabaja con arrays multidimensionales y recorre arrays con foreach.

$frutas = array(
    "citrico" => array("Naranja", "Limón"),
    "tropical" => array("Mango", "Papaya"),
    "otros" => array("Manzana", "Plátano")
);

echo "<h3>Frutas organizadas por tipo:</h3>";
foreach ($frutas as $tipo => $grupo_frutas) {
    echo "<strong>$tipo:</strong> ";
    foreach ($grupo_frutas as $fruta) {
        echo $fruta . " ";
    }
    echo "<br/>";
}

// Ordenar un array
sort($frutas["otros"]);
echo "<h3>Frutas 'otros' ordenadas:</h3>";
foreach ($frutas["otros"] as $fruta) {
    echo $fruta . " ";
}
?>