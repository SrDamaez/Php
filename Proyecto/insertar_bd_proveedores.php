<?php
include_once("conexion.php");

$nombre=$_REQUEST['nombre'];
$ubicacion=$_REQUEST['ubicacion'];
$telefono=$_REQUEST['telefono'];

$conexion->query("insert into proveedor(nombre, ubicacion, telefono) values('$nombre', '$ubicacion', '$telefono')");

header("Location: consulta_proveedores.php");