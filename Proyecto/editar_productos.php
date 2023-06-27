<?php

include_once("conexion.php");

$id_producto=$_REQUEST['id_producto'];
$nombre=$_REQUEST['nombre'];
$descripcion=$_REQUEST['descripcion'];
$costo=$_REQUEST['costo'];
$precio=$_REQUEST['precio'];
$cantidad=$_REQUEST['cantidad'];
$proveedor=$_REQUEST['proveedor'];

$conexion->query("UPDATE producto SET nombre='$nombre', descripcion='$descripcion', costo='$costo', precio='$precio', cantidad='$cantidad', proveedor='$proveedor' WHERE id_producto='$id_producto'");


header("Location: consulta_productos.php");

?>