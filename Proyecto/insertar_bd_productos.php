<?php
include_once("conexion.php");

$nombre=$_REQUEST['nombre'];
$descripcion=$_REQUEST['descripcion'];
$costo=$_REQUEST['costo'];
$precio=$_REQUEST['precio'];
$cantidad=$_REQUEST['cantidad'];
$proveedor=$_REQUEST['proveedor'];

$conexion->query("insert into producto(nombre, descripcion, costo, precio, cantidad, proveedor) values('$nombre', '$descripcion', '$costo', '$precio', '$cantidad', '$proveedor')");

header("Location: consulta_productos.php");