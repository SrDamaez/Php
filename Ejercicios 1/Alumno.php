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
            <h4>Ingrese la nota 1: <input type="num" name="nota1"></h4>
            <h4>Ingrese la nota 2: <input type="num" name="nota2"></h4>
            <h4>Ingrese la nota 3: <input type="num" name="nota3"></h4>

            <input type="submit" value="enviar" name="submit">
        </form>
    </body>
</html>

<?php
if(isset($_REQUEST['submit'])){
    $nota1 = $_REQUEST['nota1'];
    $nota2 = $_REQUEST['nota2'];
    $nota3 = $_REQUEST['nota3'];

    $promedio = (($nota1+$nota2+$nota3)/3);
    if($promedio>=3.5){
        echo "Aprobo con nota de: ", $promedio;
    }else{
        echo "No aprobo";
    }

}
?>