<?php
if(isset($_REQUEST['submit'])){
    $actividad = $_REQUEST['actividad'];
    $minutos = $_REQUEST['minutos'];
    $quemacolori=0;
    if($actividad==1){
        $quemacolori = ($minutos*1.08);
    }else if($actividad==2){
        $quemacolori = ($minutos*1.66);
    }else{
        $quemacolori = 0;
    }

    echo "Calorias quemadas: ", $quemacolori;
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
        <p>Minutos que permanecio haciendo la actividad: <input type="number" name="minutos" id="">
            <select name="actividad" id="">
                <option value="1">Dormido</option>
                <option value="2">Sentado</option>
            </select>
        </p>
        <input type="submit" value="enviar" name="submit">
    </form>
</body>
</html>