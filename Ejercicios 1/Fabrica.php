<!-- FABRICA -->
<?php

if(isset($_REQUEST['submit'])){
    $turno = $_REQUEST['turno'];
    $festivos = $_REQUEST['festivos'];
    $horastra = $_REQUEST['horastra'];
    $dinerneto=0;
    if($turno == 1){
        $diner = ($horastra*50000);
        if($diner>800000){
            $dinerneto = ($diner*0.1);
            $dinerneto = ($diner-$dinerneto);
        }else{
            $dinerneto = $diner;
        }
    }else if($turno == 2){
        $diner = ($horastra*80000);
        if($diner>800000){
            $dinerneto = ($diner*0.1);
            $dinerneto = ($diner-$dinerneto);
        }else{
            $dinerneto = $diner;
        }
    }

    if($festivos==1){
        $dinerfesti = ($dinerneto*0.15);
        $dinerneto = ($dinerneto+$dinerfesti);
    }else{

    }
    echo "Su salario es de: ", $dinerneto;
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
        <h4>Seleccione el turno
            <select name="turno" id="">
                <option value="1">Diurno</option>
                <option value="2">Nocturno</option>
            </select>

        </h4>
        <h4>Trabaja domingos y festivos
            <select name="festivos" id="">
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </h4>
        <h4>Horas que trabajo: <input type="number" name="horastra"></h4>
        <input type="submit" value="enviar" name="submit">
    </form>
</body>
</html>