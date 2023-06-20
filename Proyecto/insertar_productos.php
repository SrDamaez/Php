<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insertar_bd_productos.php" method="POST">
        Nombre: <input type="text" name="nombre"><br>
        Descripcion: <input type="text" name="descripcion"><br>
        Costo: <input type="number" name="costo"><br>
        Precio: <input type="number" name="precio"><br>
        Cantidad: <input type="number" name="cantidad"><br>
        Proveedor: <input type="text" name="proveedor"><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>