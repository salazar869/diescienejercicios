<?php
@session_start();
include_once "../controlador/enrutamiento.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Crear Evento</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="recursos/assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../recursos/css/styles.css" rel="stylesheet" />

        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="../seguridad/vista2.php">EVENTOS BUGA</a>
                
                <!-- MOSTRAR CUANDO INICIE SESION-->
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">                      
                        <li class="nav-item"><a class="nav-link" href="misEventos.php">Mis Eventos</a></li>
                        <li class="nav-item"><a class="nav-link" href="../controlador/cerrarSesion.php">Cerrar Sesión</a></li>                        
                    </ul>                     
                </div>                
            </div>
            <a class="" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nombreUsuario']; ?></span>
                <img class="img-profile rounded-circle" width="80" height="80" src="<?php echo $_SESSION['foto']; ?>">
            </a>
        </nav>
        <!-- FORMULARIO CREAR EVENTO-->
        <header class="masthead">
<!--            <section class="page-section" id="contact">-->
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h3 class="text-white font-weight-bold">Crear Evento</h3>
                        <hr class="divider" />

                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">

                        <form action="../controlador/crearEventoControlador.php" method='post' data-sb-form-api-token="API_TOKEN" enctype="multipart/form-data">

                            <!-- NOMBRE EVENTO-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="i1" name="c1" type="text" placeholder="Ingrese Nombre del Evento" data-sb-validations="required" />
                                <label for="i1">Nombre Evento</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Ingrese Nombre del Evento.</div>
                            </div>  
                            <!-- PARTE DE MENSAJE-->

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="i2" name="c2" type="text" placeholder="Ingrese descripción del evento" style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="i2">Ingrese descripción del evento</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Descripción del evento requerida.</div>
                            </div>
                            <!-- PARTE DE FECHA-->

                            <div class="form-floating mb-3">
                                <input class="form-control" id="i3" name="c3" type="date" placeholder="Ingrese fecha del evento"  data-sb-validations="required">
                                <label for="i3">Ingrese fecha del evento</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Ingrese fecha del evento</div>
                            </div>
                            <div class="form-floating mb-3">
                                <label for=""></label>
                                <input type="file" name="foto" id="" required class="btn btn-light btn-circle btn-sm">
                                <p class="help-block" >Suba una Imagen</p>
                            </div>

                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>

                            <div class="d-grid"><button class="btn btn-light " id="submitButton" type="submit">Enviar</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </section>

    </header>

    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Hi school musical Company </div></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="../recursos/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>


