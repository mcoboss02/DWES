<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Uso de la superglobal $_SERVER

echo "Dirección IP del servidor: " . $_SERVER['SERVER_ADDR'] . "<br/>";
echo "Nombre del servidor: " . $_SERVER['SERVER_NAME'] . "<br/>";
echo "Método de solicitud: " . $_SERVER['REQUEST_METHOD'] . "<br/>";
?>