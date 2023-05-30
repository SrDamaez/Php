<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet"/>
    <link href="../css/merostylo.css" rel="stylesheet"/>
    <title>Ejercicio 2</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Ejercicios PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="me-auto mb-2 mb-lg-0 ms-lg-4">

                </div>
                <ul class="navbar-nav d-flex">
                    <li class="nav-item"><a class="nav-link" href="Ejercicio_1.php">Ejercicio 1</a></li>
                    <li class="nav-item"><a class="nav-link active" href="Ejercicio_2.php">Ejercicio 2</a></li>
                    <li class="nav-item"><a class="nav-link" href="Ejercicio_3.php">Ejercicio 3</a></li>
                    <li class="nav-item"><a class="nav-link" href="Ejercicio_4.php">Ejercicio 4</a></li>
                    <li class="nav-item"><a class="nav-link" href="Ejercicio_5.php">Ejercicio 5</a></li>
                    <li class="nav-item"><a class="nav-link" href="Ejercicio_6.php">Ejercicio 6</a></li>
                    <li class="nav-item"><a class="nav-link" href="Ejercicio_7.php">Ejercicio 7</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-3">
            <!--  -----------      Agregar a la tabla     -----------  -->
            <div class="row gx-12 gx-lg-12 row-cols-1 row-cols-md-1 row-cols-xl-1 justify-content-center">
                <div class="col mb-5">
                    <div class="card" id="div_agregar">
                        <div class="card-body p-4" id="div_agregar_empleado">
                            <div class="text-center" id="div_texto_agregar">
                                <h5 class="fw-bolder">Tienda de naranjas</h5>
                            </div>
                            <div class="container pt-4 pb-4">
                                <div class="row">
                                    <?php
                                        if(empty($_REQUEST)){
                                    ?>
                                    <form action="" method="post" class="col" id="label_num">
                                        <div class="row">
                                            <label for="num" class="form-label text-center">Ingrese la cantidad de clientes</label>
                                            <input type="number" class="form-control" name="num" id="">
                                        </div>
                                        <div class="row pt-4">
                                            <input type="submit" value="Enviar" name="submit" class="btn btn-outline-light mt-auto">
                                        </div>
                                    </form>
                                    <?php
                                        }elseif(isset($_REQUEST['num'])){
                                    ?>
                                </div>
                            </div>
                            <div class="container pt-4 pb-4">
                                <div class="row">
                                    <form action="" method="post">
                                        <?php
                                            $num = $_REQUEST['num'];
                                            for($i=0; $i<$num; $i++){
                                            echo '  <div class="row text-center pt-3" >
                                                        <h6>Ingrese la cantidad de kilos: Cliente ',($i+1),'</h6>
                                                        <input type="number" name="cantidad[]" value="">
                                                    </div>';
                                        }
                                        ?>
                                        <div class="row pt-4">
                                            <input type="submit" value="Enviar" name="submit" class="btn btn-outline-light mt-auto">
                                        </div>
                                    </form>
                                    <div class="container">
                                        <?php
                                            }else{
                                                $ganaciast = 0;
                                                foreach($_REQUEST['cantidad'] as $cantidad){
                                                    echo '  <div class="row text-center" >
                                                                <h6>Cantidad kilos: ', $cantidad, '</h6>
                                                            </div>';
                                                    $totalpago = $cantidad*3.130;
                                                    if($cantidad>10){
                                                        $totalpago=$totalpago-($totalpago*0.15);
                                                        echo '  <div class="row text-center">
                                                                    <h6>Tiene Descuento.</h6>
                                                                    <h6>Total a pagar: ', $totalpago, '</h6>
                                                                    <h6>-----------------------------------------</h6>    
                                                                </div>';
                                                    }else{
                                                        echo '  <div class="row text-center" >
                                                                    <h6>NO tiene Descuento.</h6>
                                                                    <h6>Total a pagar: ', $totalpago, '</h6>
                                                                    <h6>-----------------------------------------</h6>    
                                                                </div>';
                                                    }
                                                $ganaciast = $ganaciast+$totalpago;
                                            }
                                        ?>
                                        <br>
                                        <?php
                                        echo '  <div class="row text-center" >
                                                    <h6>Ganancias de la tienda: ', $ganaciast, '</h6>
                                                </div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Escolar</h1>
    <?php
    if (empty($_REQUEST)) {
    ?>
        <form action="" method="post">
            <label for="num">Cuantos Alumnos hay en el curso? <input type="text" name="num"></label>
            <input type="submit" value="enviar" name="submit">
        </form>
    <?php
    } elseif (isset($_REQUEST['num'])) {
    ?>
        <form action="" method="post">
            <?php
            $num = $_REQUEST['num'];
            for ($i = 0; $i < $num; $i++) {
            ?>
                <p>Ingrese el nombre: <input type="text" name="nombre[]"></p>
                Ingrese las notas del alumno <?php echo ($i + 1); ?>:
                <input type="number" name="nota1[]" value="">
                <input type="number" name="nota2[]" value="">
                <input type="number" name="nota3[]" value="">
                <br>
            <?php
            }
            ?>
            <input type="submit" value="Enviar">
        </form>
    <?php
    } else {
        $nombre = $_REQUEST['nombre'];
        $notas1 = $_REQUEST['nota1'];
        $notas2 = $_REQUEST['nota2'];
        $notas3 = $_REQUEST['nota3'];
        $nota = 0;
        for ($i = 0; $i < count($notas1); $i++) {
            $suma = ($notas1[$i] + $notas2[$i] + $notas3[$i]) / 3;
            echo "El estudiante " . $nombre[$i] . ": " . $suma . "<br>";
            if ($suma > $nota) {
                $auxi = $i;
                $promemayo = $suma;
            }
        }
        echo "<br><br><br>Mejor promedio es de: " . $nombre[$auxi] . " Con un promedio de: " . $promemayo;
    }
    ?>
</body>

</html>