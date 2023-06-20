<?php

include_once("conexion.php");

$nombre=$_REQUEST['nombre'];
$descripcion=$_REQUEST['descripcion'];
$costo=$_REQUEST['costo'];
$precio=$_REQUEST['precio'];
$cantidad=$_REQUEST['cantidad'];
$proveedor=$_REQUEST['proveedor'];

$conexion->query("UPDATE producto set nombre='$nombre', descripcion='$descripcion', costo='$costo', precio='$precio', cantidad='$cantidad', proveedor='$proveedor' where nombre='$nombre'");


header("Location: consulta_productos.php");

?>