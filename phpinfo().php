<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Este script muestra la información de configuración de PHP y añade más datos como la fecha y zona horaria.

phpinfo();

// Mostrar la fecha y hora actual
echo "<br/>La fecha actual es: " . date("Y-m-d H:i:s") . "<br/>";

// Mostrar la zona horaria predeterminada
echo "Zona horaria: " . date_default_timezone_get();
?>