<?php

include_once("conexion.php");

$nombre = $_GET['nombre'];

$conexion->query("DELETE FROM producto where nombre='$nombre'");


header("Location: consulta_productos.php");

?>