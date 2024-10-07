<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Uso de cookies

if (isset($_COOKIE['usuario'])) {
    echo "Cookie de usuario: " . $_COOKIE['usuario'];
} else {
    setcookie("usuario", "Manuel", time() + (86400 * 30), "/");
    echo "Cookie de usuario creada.";
}
?>