<?php

define("IVA", "0.12");

$nombre = $_POST['Nombre'];
$ruc = $_POST['RUC'];


$subtotal= $_POST['Cant'] * $_POST['Precio'];
$miiva= $subtotal * IVA;

$total = $subtotal + $miiva;

echo "Nombre " . $_POST['Nombre'] ."</br>";
echo "RUC "  . $_POST['RUC'] ."</br>";
echo "Cantidad "  . $_POST['Cant'] ."</br>";
echo "Precio "  . $_POST['Precio'] ."</br>";

echo "IVA "  . $miiva ."</br>";
echo "Total a Pagar " .$total;

?>
