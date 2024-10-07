<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Uso de sesiones
session_start();
$_SESSION['usuario'] = 'Manuel';
echo "El nombre de usuario almacenado en la sesión es: " . $_SESSION['usuario'];
?>