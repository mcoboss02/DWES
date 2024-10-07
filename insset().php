<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024

$nombre = "Manuel";

if (isset($nombre)) {
    echo "La variable \$nombre está definida.<br/>";
} else {
    echo "La variable \$nombre no está definida.<br/>";
}

$apellido = null;
if (isset($apellido)) {
    echo "La variable \$apellido está definida.<br/>";
} else {
    echo "La variable \$apellido no está definida.<br/>";
}
?>
