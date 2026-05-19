<?php
$nombre = $_POST['nombre'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$pagar = $cantidad * $precio ;
 echo "El cliente es:" . $nombre ;
 echo "<br><br>";
 echo "El subtotal es:" . $pagar ;
 echo "<br><br>";
 echo "El total a pagar es:" . $pagar;
 ?>