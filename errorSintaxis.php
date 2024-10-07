<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Este script genera un error de sintaxis y maneja el error con un mensaje personalizado.

function generaError() {
    try {
        eval('echo "Hola Mundo;'); // Esto generará un error de sintaxis
    } catch (ParseError $e) {
        echo "Error capturado: " . $e->getMessage();
    }
}

generaError();
?>