<?php
if(isset($_REQUEST['submit'])){
    $valorcompra = $_REQUEST['valorcompra'];
    if($valorcompra>100000){
        echo "Precio Sin descuento: ", $valorcompra, '<br>';
        echo "Precio con descuento: ", ($valorcompra-($valorcompra*0.2));
    }
    else{
        echo "NO HAY DESCUENTO ";
    }
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
        <h4>Ingrese el valor de la compra: <input type="text" name="valorcompra" id=""> </h4>
        <input type="submit" value="enviar" name="submit">
    </form>
</body>
</html>