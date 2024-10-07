<?php
// Autor: Manuel Cobos Solís
// Fecha: 06/10/2024
// Uso de la función date y getdate

date_default_timezone_set('Europe/Madrid');
echo "Fecha y hora actual: " . date("Y-m-d H:i:s") . "<br/>";

// Obtener más información de la fecha actual
$info_fecha = getdate();
echo "Hoy es " . $info_fecha['weekday'] . ", " . $info_fecha['mday'] . " de " . $info_fecha['month'] . " de " . $info_fecha['year'] . "<br/>";
?>
