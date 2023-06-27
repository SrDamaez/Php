<?php

include_once("conexion.php");

$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$telefono = $_POST['telefono'];

$conexion->query("UPDATE proveedor SET ubicacion='$ubicacion', telefono='$telefono' WHERE nombre='$nombre'");


header("Location: consulta_proveedores.php");

?>