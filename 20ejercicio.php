<?php
$numero = $_POST['numero'];
$suma = 0 ;

for($i = 1; $i <=$numero; $i++){
    $suma += $i;
}
echo "La suma es:" . $suma;
?>