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
        <title>EVENTOS BUGA</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../recursos/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../recursos/estilos.css"
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="../index.php">EVENTOS BUGA</a>

                <!-- MOSTRAR CUANDO INICIE SESION-->
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">                        
                        <li class="nav-item"><a class="nav-link" href="../vista/crearEvento.php">Crear Evento</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Mis Eventos</a></li>
                        <li class="nav-item"><a class="nav-link" href="../controlador/cerrarSesion.php">Cerrar Sesión</a></li>                        
                    </ul>                     
                </div>                
            </div>
            <a class="" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nombreUsuario']; ?></span>
                <img class="img-profile rounded-circle" width="80" height="80" src="<?php echo $_SESSION['foto']; ?>">
            </a>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-10">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h3 class="text-white font-weight-bold">Mis Eventos</h3>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">

                        <!-- PRUEBA DE COMO SE VEN LOS EVENTOS-->
                        <table class="table table-bordered table-hover table-fixed" >

                            <thead>
                                <tr style="width: 680px">
                                    <th style="width: 150px">Imagen</th>                                              
                                    <th style="width: 150px" >Evento</th>
                                    <th style="width: 380px" >Descripción</th>
                                    <th style="width: 150px" >Acciones</th>


                                </tr>
                            </thead>


                            <tbody>                              
                                <?php
                                if (isset($_SESSION["usuario"])) {
                                    $usuario = $_SESSION["usuario"];
                                }
                                include_once "../modelo/eventosModelo.php";
                                $eventosModelo = new eventosModelo();
                                $result = $eventosModelo->mostrarTodos();
                                $contador = 0;
                                while ($fila = mysqli_fetch_array($result)) {

                                    if ($fila != NULL) {
                                        $contador++;

                                        if ($fila['id_usuario'] == $usuario) {
                                            echo '<tr style="width: 680px">
                                            <td style="width: 148px"> <img src="' . $fila['foto'] . '" class="rounded float-left" width="80" height="80" ></td>
                                            <td style="width: 150px" >' . $fila['nombreEvento'] . '</td>
                                            <td style="width: 385px" >' . $fila['descripcionEvento'] . '</td> 
                                                
                                               <td style="width: 135px"><a href="../controlador/eventoEliminarControlador.php?id=' . $fila['id_eventos'] . '" class="btn btn-link btn-circle btn-sm"  >
                                                Eliminar
                                                 </a>
                                                 <a href="eventoModificar.php?id=' . $fila['id_eventos'] . '" class="btn btn-link btn-circle btn-sm"  title="Modificar">
                                                 Editar
                                                 </a> </td> 
                               </tr>';
                                        }
                                    }
                                }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>


            </div> 
        </div> 

    </div>



    <!-- ESTE BOTON ES PARA LLEVAR A LA PARTE DE ABOUT -->
    <!--                        <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>-->
</div>
</div>
</div>
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


