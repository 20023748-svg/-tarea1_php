<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$suma = ($nota1 + $nota2 + $nota3) / 3;
if ($suma >= 6){
    echo "usted aprobo con:" . $suma;
}else{
    echo "usted reprobo con:" . $suma;
}
?>