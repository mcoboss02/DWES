<?php
// arrays_lib.php

/**
 * Función que simula array_diff: compara dos arrays y devuelve los elementos que están en el primero pero no en el segundo.
 */
function array_diff_propios($array1, $array2) {
    $result = [];
    foreach ($array1 as $item) {
        if (!in_array($item, $array2)) {
            $result[] = $item;
        }
    }
    return $result;
}

/**
 * Función que simula array_diff_key: compara las claves de dos arrays y devuelve las claves que están en el primero pero no en el segundo.
 */
function array_diff_key_propios($array1, $array2) {
    $result = [];
    foreach ($array1 as $key => $value) {
        if (!array_key_exists($key, $array2)) {
            $result[$key] = $value;
        }
    }
    return $result;
}

/**
 * Función para unir dos arrays en uno solo.
 */
function unir_arrays($array1, $array2) {
    return array_merge($array1, $array2);
}

/**
 * Función que genera una serie de Fibonacci de 'n' términos.
 */
function generar_fibonacci($n) {
    $fibonacci = [1, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

/**
 * Función que genera un array con 10 números aleatorios entre dos valores dados.
 */
function generar_array_aleatorio($min, $max) {
    $array = [];
    for ($i = 0; $i < 10; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

/**
 * Función para obtener el valor máximo en un array de 10 números aleatorios.
 */
function obtener_maximo($array) {
    return max($array);
}

/**
 * Función que cuenta cuántas veces aparece el número 2 en un array.
 */
function contar_dos($array) {
    return count(array_filter($array, fn($value) => $value == 2));
}

/**
 * Función para convertir notas en palabras.
 */
function convertir_nota($nota) {
    if ($nota < 5) return "muy baja";
    elseif ($nota <= 8) return "muy bien";
    else return "excelente";
}

/**
 * Función para validar el NIF en base al DNI.
 */
function obtener_nif($dni) {
    $dni = str_pad($dni, 8, "0", STR_PAD_LEFT);
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    $letra = $letras[$dni % 23];
    return $dni . $letra;
}

/**
 * Función booleana que valida un correo.
 */
function validar_correo($correo) {
    return filter_var($correo, FILTER_VALIDATE_EMAIL) !== false;
}
?>