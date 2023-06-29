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

    <?php
		$id_proveedor=$_REQUEST['id_proveedor'];
		$nombre=$_REQUEST['nombre'];
        $ubicacion=$_REQUEST['ubicacion'];
        $telefono=$_REQUEST['telefono'];
    ?>

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
                    <li><a href="consulta_productos.php" class="nav-link scrollto"><i class="bx bx-package"></i> <span>Productos</span></a></li>
                    <li><a href="consulta_proveedores.php" class="nav-link scrollto active"><i class="bx bxs-truck"></i> <span>Proveedores</span></a></li>
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
                    <h2>Modificando Proveedor</h2>
                    <p>En este momentó está modificando un proveedor, recuerde que cualquier cambio quedará registrado.</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 pt-4 pt-lg-0 content">
                        <div class="row">
                            <div class="col-lg-12 container">
                                <form action="editar_proveedores.php" method="POST">
                                    <div class="row">
                                        <div class="mb-3 col-6">
                                            <label for="id_proveedor" class="form-label">ID</label>
                                            <input type="text" name="id_proveedor" class="form-control" value="<?php echo $id_proveedor; ?>">
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="ubicacion" class="form-label">Ubicacion</label>
                                            <input type="text" name="ubicacion" class="form-control" value="<?php echo $ubicacion; ?>">
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="telefono" class="form-label">Telefono</label>
                                            <input type="text" name="telefono" class="form-control" value="<?php echo $telefono; ?>">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" value="Editar" class="btn btn-primary">
                                        <a class="btn btn-danger" href="consulta_proveedores.php?" title="Cancelar">
                                            <i class="icon-edit">Cancelar</i>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>