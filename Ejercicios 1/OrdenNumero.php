<?php
if(isset($_REQUEST['submit'])){
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];

    if($num1>$num2){
        echo $num2, "-", $num1;
    }else{
        echo $num1, "-", $num2;
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
        <h4>Ingrese el numero 1: <input type="text" name="num1"></h4>
        <h4>Ingrese el numero 2: <input type="text" name="num2"></h4>
        <input type="submit" value="enviar" name="submit">
    </form>
</body>
</html>