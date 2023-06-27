<?php
include_once("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Quiosquito</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">
            <div class="profile">
                <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light">Nombre Vendedor</h1>
                <h5 class="text-white-50 text-center">Cargo Persona</h5>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="consulta_productos.php" class="nav-link scrollto active"><i class="bx bx-package"></i> <span>Productos</span></a></li>
                    <li><a href="consulta_proveedores.php" class="nav-link scrollto"><i class="bx bxs-truck"></i> <span>Proveedores</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                    <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Listado de Productos</h2>
                    <p>Se mestran en pantalla una lista de los productos que se encuentran registrados actualmente.</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 pt-4 pt-lg-0 content">
                        <div class="container">
                            <div class="row justify-content-center mb-3 mt-2">
                                <div class="col-2">
                                    <a href="insertar_productos.php" class="btn btn-success">Insertar Productos</a>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-4">
                                <div class="col-6">
                                    <form name="form3" method="post" action="" class="form-search">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                                            <input type="text" name="buscar" autocomplete="off" class="form-control" autofocus placeholder="Buscar Productos por Nombre">
                                            <button type="submit" class="btn btn-primary"><strong>Buscar</strong></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                            <table class="table table-bordered">
                                <tr class="well">
                                    <td>ID</td>
                                    <td><strong>Nombre</strong></td>
                                    <td>Descripcion</td>
                                    <td>Costo</td>
                                    <td>Precio</td>
                                    <td>Cantidad</td>
                                    <td>Proveedor</td>
                                    <td>Modificar</td>
                                </tr>
                                <?php
                                    if(isset($_POST['buscar'])){
                                    $buscar=($_POST['buscar']);
                                    $consulta=$conexion->query("SELECT * FROM producto WHERE nombre LIKE '%$buscar%' ORDER BY nombre DESC");	
                                }else{
                                    $consulta=$conexion->query("SELECT * FROM producto");		
                                }
                                while($row=$consulta->fetch_array()){
                                ?>

                                <tr>
                                    <td><?php echo $row['id_producto']; ?></td>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['descripcion']; ?></td>
                                    <td><?php echo $row['costo']; ?></td>
                                    <td><?php echo $row['precio']; ?></td>
                                    <td><?php echo $row['cantidad']; ?></td>
                                    <td><?php echo $row['proveedor']; ?></td>
                                    <td>
                                        <center>
                                            <a class="btn btn-primary" href="modificar_productos.php?
                                                id_producto=<?php echo $row['id_producto'] ?> &
                                                nombre=<?php echo $row['nombre'] ?> &
                                                descripcion=<?php echo $row['descripcion'] ?> &
                                                costo=<?php echo $row['costo'] ?> &
                                                precio=<?php echo $row['precio'] ?> &
                                                cantidad=<?php echo $row['cantidad'] ?> &
                                                proveedor=<?php echo $row['proveedor'] ?>" title="Editar">
                                                <i class="icon-edit">Editar</i>
                                            </a>
                                            <a class="btn btn-danger" href="eliminar_productos.php? id_producto=<?php echo $row['id_producto'] ?>" title="Eliminar">
                                                <i class="icon-edit">Eliminar</i>
                                            </a>
                                        </center>
                                    </td> 
                                </tr>
                            <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>