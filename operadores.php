<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024

// Operadores de asignación
$a = 5;
$b = 2;
$a += $b; // $a = 7
echo "<p>El resultado de la operación \$a += \$b es: <strong>" . $a . "</strong></p>";


// Operadores de comparación
$a = 5;
$b = 2;
echo "<p>El resultado de la comparación \$a == \$b es: <strong>" . ($a == $b ? "True" : "False") . "</strong></p>";
echo "<p>El resultado de la comparación \$a != \$b es: <strong>" . ($a != $b ? "True" : "False") . "</strong></p>";
echo "<p>El resultado de la comparación \$a > \$b es: <strong>" . ($a > $b ? "True" : "False") . "</strong></p>";
echo "<p>El resultado de la comparación \$a < \$b es: <strong>" . ($a < $b ? "True" : "False") . "</strong></p>";


// Operadores lógicos
$a = 5;
$b = 2;
echo "<p>El resultado de la comparación \$a == 5 && \$b == 2 es: <strong>" . (($a == 5 && $b == 2) ? "True" : "False") . "</strong></p>";
echo "<p>El resultado de la comparación \$a == 5 || \$b == 2 es: <strong>" . (($a == 5 || $b == 2) ? "True" : "False") . "</strong></p>";
echo "<p>El resultado de la negación !(\$a == 5) es: <strong>" . (!($a == 5) ? "True" : "False") . "</strong></p>";


// Operadores de incremento y decremento
$a = 5;
echo "<p>El resultado del incremento de \$a es: <strong>" . $a++ . "</strong></p>";
echo "<p>El resultado del decremento de \$a es: <strong>" . --$a . "</strong></p>";


