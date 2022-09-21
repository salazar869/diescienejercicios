<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Crear Cuenta</title>
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
                <a class="navbar-brand" href="../index.php">EVENTOS BUGA</a>
        </nav>
        <!-- FORMULARIO LOGUIN-->
        <header class="masthead">
<!--            <section class="page-section" id="contact">-->
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6 text-center">
                            <h2 class="mt-0">Crear Cuenta</h2>
                            <hr class="divider" />

                        </div>
                    </div>
                    <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                        <div class="col-lg-6">

                            <form action="../controlador/crearCuentaControlador.php" method='post' enctype="multipart/form-data" data-sb-form-api-token="API_TOKEN">
                                <!-- NOMBRE-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="i1" name="c1" type="text" placeholder="Ingrese Nombre" data-sb-validations="required" />
                                    <label for="i1">Nombre</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Ingrese Nombre.</div>
                                </div>
                                 <!-- EMAIL-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="i2" name="c2" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                    <label for="i2">Email</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Ingrese Email.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email no valido</div>
                                </div>
                                 <!-- TELEFONO-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="i3" name="c3" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                    <label for="i3">Telefono</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Ingrese Telefono.</div>
                                </div>
                                 
                                  <!-- CONTRASEÑA-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="i4" name="c4" type="password" placeholder="Contraseña" data-sb-validations="required" />
                                    <label for="i4">Contraseña</label>
                                    <div class="invalid-feedback" data-sb-feedback="password:required">Ingrese Contraseña.</div>
                                </div>
                                  <div class="form-floating mb-3">                                
                                <input type="file" id="i5" name="foto" class="btn btn-light btn-circle btn-sm">
                                <label for="i5"></label>
                                <p class="help-block" >Suba una imagen (opcional).</p>
<!--                                <img src="img/anonymous.png" class="img-thumbnail previsualizar" width="100px">-->
                            </div>

                                
                                <div class="d-grid"><button class="btn btn-light " id="submitButton" type="submit">Guardar</button></div>
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


