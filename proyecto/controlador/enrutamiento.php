<?php
    @session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../vista/loguin.php");
        $_SESSION['mensaje'] ="primero inicie sesion";
  
        exit();
    }