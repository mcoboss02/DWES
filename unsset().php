<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024

$nombre = "Manuel";
echo "La variable \$nombre es: $nombre<br/>";

// Eliminar la variable
unset($nombre);

if (isset($nombre)) {
    echo "La variable \$nombre todavía está definida.<br/>";
} else {
    echo "La variable \$nombre ha sido eliminada.<br/>";
}

$frutas = array("Manzana", "Banana", "Cereza");
echo "Array original: ";
print_r($frutas);

// Eliminar el segundo elemento
unset($frutas[1]);

echo "<br/>Array después de eliminar el índice 1: ";
print_r($frutas);
?>