<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet"/>
    <link href="../css/merostylo.css" rel="stylesheet"/>
    <title>Document</title>
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
                    <li class="nav-item"><a class="nav-link active" href="#!">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Nómina</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Factura</a></li>
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
                                <h5 class="fw-bolder">Almacen</h5>
                            </div>
                            <div class="container pt-4 pb-4">
                                <div class="row">
                                    <form action="" method="post" class="col" id="label_horas">
                                        <div class="row">
                                            <label for="horas" class="form-label text-center">Ingrese el valor de la compra</label>
                                            <input type="text" class="form-control" name="valorcompra" id="">
                                        </div>
                                        <div class="row pt-4">
                                            <input type="submit" value="Enviar" name="submit" class="btn btn-outline-light mt-auto">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="container pt-4 pb-4">
                                <?php
                                if(isset($_REQUEST['submit'])){
                                    $valorcompra = $_REQUEST['valorcompra'];
                                    if($valorcompra>100000){
                                        echo '  <div class="row text-center" >
                                                    <h6>Precio SIN descuento: ', $valorcompra, '</h6>
                                                </div>';
                                        echo '  <div class="row text-center" >
                                                    <h6>Precio CON descuento: ', ($valorcompra-($valorcompra*0.2)), '</h6>
                                                </div>';
                                    }
                                    else{
                                        echo '  <div class="row text-center" >
                                                    <h6>No hay descuento</h6>
                                                </div>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>