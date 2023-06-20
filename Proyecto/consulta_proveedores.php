<?php
include_once("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Proveedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>


<table class="table table-bordered">
    <tr class="well">
        <td>
            <h1 align="center">Listado Proveedores</h1>
            <center>
                <form name="form3" method="post" action="" class="form-search">
                    <div class="input-prepend input-append">
                        <span class="add-on"><i class="icon-search"></i></span>
                        <input type="text" name="buscar" autocomplete="off" class="input-xxlarge search-query" 
                        autofocus placeholder="Buscar Proveedores por Nombre">
                    </div>
                <button type="submit" class="btn" name="buton"><strong>Buscar</strong></button>
                </form>
            </center>
        </td>
    </tr>
</table>
<a href="insertar_proveedores.php"><button>Insertar</button></a>
<table class="table table-bordered">
    <tr class="well">
        <td><strong>Nombre</strong></td>
        <td>Ubicacion</td>
        <td>Telefono</td>
    </tr>
    <?php
        if(isset($_POST['buscar'])){
        $buscar=($_POST['buscar']);
        $consulta=$conexion->query("SELECT * FROM proveedor WHERE nombre LIKE '%$buscar%' ORDER BY nombre DESC");	
    }else{
        $consulta=$conexion->query("SELECT * FROM proveedor");		
    }		
        
    while($row=$consulta->fetch_array()){
    ?>
    <!-- <form action="editar.php" method="POST"> -->
    <tr>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['ubicacion']; ?></td>
        <td><?php echo $row['telefono']; ?></td>
        <td>
            <center>
                <a class="btn btn-primary" href="modificar_proveedores.php?
                    nombre=<?php echo $row['nombre'] ?> &
                    ubicacion=<?php echo $row['ubicacion'] ?> &
                    telefono=<?php echo $row['telefono'] ?> 
                " title="Editar">
                    <i class="icon-edit">Editar</i>
                </a>
            </center>
        </td>
        
</form> 
</tr>
<?php } ?>
</table>

</html>