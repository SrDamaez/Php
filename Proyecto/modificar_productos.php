<?php
include_once("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
    <?php
		$nombre=$_REQUEST['nombre'];
        $descripcion=$_REQUEST['descripcion'];
        $costo=$_REQUEST['costo'];
        $precio=$_REQUEST['precio'];
        $cantidad=$_REQUEST['cantidad'];
        $proveedor=$_REQUEST['proveedor'];
    ?>
    <form action="editar_productos.php" method="POST">
        <tr>
            <td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
            <td><input type="text" name="descripcion" value="<?php echo $descripcion; ?>"></td>
            <td><input type="text" name="costo" value="<?php echo $costo; ?>"></td>
            <td><input type="text" name="precio" value="<?php echo $precio; ?>"></td>
            <td><input type="text" name="cantidad" value="<?php echo $cantidad; ?>"></td>
            <td><input type="text" name="proveedor" value="<?php echo $proveedor; ?>"></td>


            <input type="submit" value="Editar">
        </tr>
    </form> 
        
</body>
</html>