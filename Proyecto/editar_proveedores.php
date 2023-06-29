<?php

include_once("conexion.php");

$id_proveedor=$_REQUEST['id_proveedor'];
$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$telefono = $_POST['telefono'];

$conexion->query("UPDATE proveedor SET nombre='$nombre', ubicacion='$ubicacion', telefono='$telefono' WHERE id_proveedor='$id_proveedor'");

header("Location: consulta_proveedores.php");

?>