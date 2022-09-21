<?php
    @session_start();
    unset($_SESSION['usuario']);
    header("Location: ../seguridad/vista1.php");
    $_SESSION['mensaje'] ="ha finalizado la sesion.";