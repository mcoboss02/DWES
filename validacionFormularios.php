<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Este script valida los datos de un formulario con métodos GET y POST.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    if (empty($nombre)) {
        echo "El nombre es requerido.";
    } else {
        echo "Bienvenido, $nombre!";
    }
}
?>
<form method="post" action="">
  Nombre: <input type="text" name="nombre">
  <input type="submit" value="Enviar">
</form>