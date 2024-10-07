<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Uso de gettype, settype, is_* y empty

$a = "3.1416";
$b = 3.1416;
echo "\$a es de tipo " . gettype($a) . "<br/>";
echo "\$b es de tipo " . gettype($b) . "<br/>";

// Convertimos $a a tipo float
settype($a, "float");
echo "\$a ahora es de tipo " . gettype($a) . "<br/>";

// Verificamos los tipos
if (is_float($a)) {
    echo "\$a es un número decimal.<br/>";
}

if (empty($c)) {
    echo "\$c no está definida o está vacía.<br/>";
}
?>