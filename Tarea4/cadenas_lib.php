<?php
// cadenas_lib.php

/**
 * Elimina espacios al inicio y final de una cadena.
 */
function eliminar_espacios($cadena) {
    return trim($cadena);
}

/**
 * Extrae una subcadena de una cadena.
 */
function extraer_caracteres($cadena, $inicio, $longitud) {
    return substr($cadena, $inicio, $longitud);
}

/**
 * Invierte una cadena.
 */
function invertir_cadena($cadena) {
    return strrev($cadena);
}

/**
 * Repite una cadena 'n' veces.
 */
function repetir_cadena($cadena, $n) {
    return str_repeat($cadena, $n);
}
?>