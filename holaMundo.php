<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Este script muestra un saludo personalizado con una variable y hace uso de comentarios.

// Definimos una variable
$nombre = "Manuel";

// Mostramos un mensaje de saludo utilizando la variable
echo "<h1>Hola " . $nombre . ", bienvenido a PHP.</h1><br/>";

// Podemos también utilizar comillas dobles para simplificar la concatenación
echo "Hola $nombre, este es un ejemplo de interpolación.<br/>";
?>