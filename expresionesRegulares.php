<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Expresiones regulares

$email = "test@example.com";
if (preg_match("/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})$/", $email)) {
    echo "Correo válido";
} else {
    echo "Correo no válido";
}
?>