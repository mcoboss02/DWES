<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Procesamiento de un formulario

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    
    if (empty($nombre)) {
        echo "El nombre es requerido.<br/>";
    } else {
        echo "Nombre: $nombre<br/>";
    }
    
    if (!is_numeric($edad)) {
        echo "Edad debe ser un número.<br/>";
    } else {
        echo "Edad: $edad<br/>";
    }
}
?>
<form method="post" action="">
  Nombre: <input type="text" name="nombre"><br/>
  Edad: <input type="text" name="edad"><br/>
  <input type="submit" value="Enviar">
</form>