<?php

include_once("conexion.php");

$nombre=$_REQUEST['nombre'];
$ubicacion=$_REQUEST['ubicacion'];
$telefono=$_REQUEST['telefono'];

$conexion->query("UPDATE proveedor set nombre='$nombre', ubicacion='$ubicacion', telefono='$telefono' where nombre='$nombre'");


header("Location: consulta_proveedores.php");

?>