<?php
// pruebas_arrays.php
include 'arrays_lib.php';

// Prueba de array_diff_propios
echo "<strong>Prueba array_diff_propios:</strong><br>";
$array1 = [1, 2, 3, 4];
$array2 = [3, 4, 5, 6];
print_r(array_diff_propios($array1, $array2));
echo "<br><br>";

// Prueba de array_diff_key_propios
echo "<strong>Prueba array_diff_key_propios:</strong><br>";
$array1 = ["a" => 1, "b" => 2, "c" => 3];
$array2 = ["b" => 2, "d" => 4];
print_r(array_diff_key_propios($array1, $array2));
echo "<br><br>";

// Prueba de generar_fibonacci
echo "<strong>Prueba generar_fibonacci:</strong><br>";
print_r(generar_fibonacci(10));
echo "<br><br>";

// Prueba de generar_array_aleatorio y obtener_maximo
echo "<strong>Prueba generar_array_aleatorio y obtener_maximo:</strong><br>";
$array_aleatorio = generar_array_aleatorio(1, 10);
print_r($array_aleatorio);
echo "<br>Máximo: " . obtener_maximo($array_aleatorio);
echo "<br><br>";

// Prueba de contar_dos
echo "<strong>Prueba contar_dos:</strong><br>";
echo "Número de veces que aparece el 2: " . contar_dos($array_aleatorio);
echo "<br><br>";

// Prueba de convertir_nota
echo "<strong>Prueba convertir_nota:</strong><br>";
echo "Nota 4: " . convertir_nota(4) . "<br>";
echo "Nota 7: " . convertir_nota(7) . "<br>";
echo "Nota 9: " . convertir_nota(9) . "<br><br>";

// Prueba de obtener_nif
echo "<strong>Prueba obtener_nif:</strong><br>";
echo obtener_nif(6994689);
echo "<br><br>";

// Prueba de validar_correo
echo "<strong>Prueba validar_correo:</strong><br>";
echo "Correo válido: " . (validar_correo("test@example.com") ? "Sí" : "No") . "<br>";
echo "Correo inválido: " . (validar_correo("test@") ? "Sí" : "No") . "<br>";
?>