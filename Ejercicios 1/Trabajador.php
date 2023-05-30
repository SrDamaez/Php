<!-- TRABAJADOR -->
<?php

if(isset($_REQUEST['submit'])){
    $producto = $_REQUEST['producto'];
    $valor = $_REQUEST['ventas'];
    if($producto==2 && $valor>10000000){
        $comision = ($valor*0.1);
    }else if($producto==1 && $valor>10000000){
        $comision = ($valor*0.04);
    }else if($producto==2 && $valor<10000000){
        $comision = ($valor*0.02);
    }else if($producto==1 && $valor<10000000){
        $comision = ($valor*0.01);
    }else{
        $comision = ($valor*0);
    }
    echo "La comicion es de: ". $comision;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h4>Ingresa el precio al que se vendió el producto (1 o 2): 
            <select name="producto" id="">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </h4>
        <h4>Ingresa el valor total de ventas realizadas por el trabajador en el mes:  <input type="number" name='ventas'></h3>
        <input type="submit" value="enviar" name="submit">

        
    </form>
</body>
</html>