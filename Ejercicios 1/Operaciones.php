<!-- TRABAJADOR -->
<?php
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

echo "La comicion es de: ". $comision
?>

<!-- FABRICA -->
<?php
$turno = $_REQUEST['turno'];
$festivos = $_REQUEST['festivos'];
$horastra = $_REQUEST['horastra'];

if($turno == 1){
    $diner = ($horastra*50000);
}

?>