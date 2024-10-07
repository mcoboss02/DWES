<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Este script maneja excepciones en PHP.

function division($dividendo, $divisor) {
    if ($divisor == 0) {
        throw new Exception("División por cero.");
    }
    return $dividendo / $divisor;
}

try {
    echo division(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>