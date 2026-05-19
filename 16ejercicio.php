<?php
$nombre = $_POST['nombre'];
$horas = $_POST['horas'];
$pago = $_POST['pago'];

$sueldo = $horas * $pago;
echo "su nombre es:" . $nombre;
echo "<br><br>";
echo "el pago es: $" . $sueldo;
?>