<?php
$nlinea = !empty($_GET['id']) ? $_GET['id'] : 0;
$linea='';
//Si hay una linea que modificar "$nlinea", entonces.
if($nlinea){
    include('conexion.php');
	$registro = "SELECT * FROM cliente WHERE IDcliente = $nlinea;";
	$resultado = mysqli_query($conexion,$registro);
	$linea = mysqli_fetch_row($resultado);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingreso de datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
    <div class="cabecera">Actualización de datos</div>
    <div class="contenido">
    <form class="contact" action="actualizar.php" method='post'>
            <input type="hidden" name="nlinea" value="<?php echo $nlinea;?>">
            <label for="i0">Sucursal</label>
            <input type="text" id="i0" name="c0" value="<?php echo $linea[1];?>">
            <br>
            <label for="i1">nombre</label>
            <input type="text" id="i1" name="c1" value="<?php echo $linea[2];?>">
            <br>
            <label for="i2">apellido</label>
            <input type="text" id="i2" name="c2" value="<?php echo $linea[3];?>">
            <br>
            <label for="i3">direccion</label>
            <input type="text" id="i3" name="c3" value="<?php echo $linea[4];?>">
            <br>
            <label for="i4">telefono</label>
            <input type="text" id="i4" name="c4" value="<?php echo $linea[5];?>">
            <br>
            
            <input class="boton" type="submit" value="actualizar">
    </form>
    </div>
    </div>
</body>
</html>