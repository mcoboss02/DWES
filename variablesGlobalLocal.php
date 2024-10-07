<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Este script muestra cómo funcionan las variables locales, globales y estáticas en PHP.

$mensaje = "Hola desde fuera de la función"; // Variable global

function muestraMensaje() {
    global $mensaje; // Usamos la palabra clave 'global' para acceder a la variable global
    echo $mensaje . "<br/>";
    
    static $contador = 0; // Variable estática, mantiene su valor entre llamadas
    $contador++;
    echo "Llamada a la función: $contador veces.<br/>";
}

muestraMensaje();
muestraMensaje();
?>