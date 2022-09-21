
<?php

include_once '../controlador/conexion.php';

class eventosModelo {

    function insertar($nombre, $carrera, $telefono, $documento, $fecha, $direccion, $foto) {
        global $conexion;
        $consulta = "INSERT INTO `eventos` (`id`, `nombre`, `carrera`, `telefono`, `documento`, `fecha`, `direccion`, `foto`) VALUES (NULL, '$nombre', '$carrera', '$telefono', '$documento', '$fecha', '$direccion','$foto');";
        $query = mysqli_query($conexion, $consulta);
    }

    function eliminar($id) {

        global $conexion;
        $consulta = "DELETE FROM `eventos` WHERE `eventos`.`id_eventos` = $id";
        $query = mysqli_query($conexion, $consulta);
       
    }

    function modificar($nombreEvento, $descripcionEvento, $fechaEvento, $foto, $id) {
        global $conexion;
        $consulta = "UPDATE `eventos` SET `nombreEvento` = '$nombreEvento', `descripcionEvento` = '$descripcionEvento', `fecha` = '$fechaEvento', `foto` = '$foto' WHERE `eventos`.`id_eventos` = $id;";
        $query = mysqli_query($conexion, $consulta);
    }

    function modificarFoto($foto, $id) {
        global $conexion;
        $consulta = "UPDATE `eventos` SET `foto` = '$foto' WHERE `docentes`.`id` = $id;";
        $query = mysqli_query($conexion, $consulta);
    }

    function mostrarTodos() {
        global $conexion;
        $consulta = "SELECT * FROM `eventos`";
        $query = mysqli_query($conexion, $consulta);
        return $query;
    }
    function mostrarEvento($id) {
        global $conexion;
        $consulta = "SELECT * FROM `eventos` WHERE id_eventos = $id";
        $query = mysqli_query($conexion, $consulta);
        return $query;
    }

    function mostrar($id) {
        global $conexion;
        $consulta = "SELECT * FROM `eventos` WHERE id_eventos = $id";
        $query = mysqli_query($conexion, $consulta);
        return $query;
    }   


    function ultimoId() {
        global $conexion;
        $consulta = "SELECT * FROM `eventos`";
        $query = mysqli_query($conexion, $consulta);
        while ($fila = mysqli_fetch_array($query)) {

            if ($fila != NULL) {
                $id = $fila['id'];
            }
        }
        return $id;
    }

    

}

?>