<?php
// pruebas_cadenas.php
include 'cadenas_lib.php';

// Prueba de eliminar_espacios
echo "<strong>Prueba eliminar_espacios:</strong><br>";
echo eliminar_espacios("   Hola mundo   ");
echo "<br><br>";

// Prueba de extraer_caracteres
echo "<strong>Prueba extraer_caracteres:</strong><br>";
echo extraer_caracteres("Hola mundo", 0, 4);
echo "<br><br>";

// Prueba de invertir_cadena
echo "<strong>Prueba invertir_cadena:</strong><br>";
echo invertir_cadena("Hola mundo");
echo "<br><br>";

// Prueba de repetir_cadena
echo "<strong>Prueba repetir_cadena:</strong><br>";
echo repetir_cadena("Hola", 3);
echo "<br><br>";
?>