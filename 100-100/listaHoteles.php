<?php
include('conexion.php');
$consulta = 'SELECT * FROM `hotel`';
$resultado = mysqli_query($conexion,$consulta);
$tabla =<<<FIN
<table>
<tr>
<th>IDhotel</th>
<th>nombre</th>
<th>direccion</th>
<th>ciudad</th>
<th>telefono</th>
<th>Habitaciones Normales</th>
<th>Habitaciones VIP</th>
<th colspan="2">Accion</th>
</tr>
FIN;

while($registro=mysqli_fetch_assoc($resultado)){
    $tabla.='<tr>';
    $tabla.="<td>{$registro['IDhotel']}</td>";
    $tabla.="<td>{$registro['nombre']}</td>";
    $tabla.="<td>{$registro['direccion']}</td>";
    $tabla.="<td>{$registro['ciudad']}</td>";
    $tabla.="<td>{$registro['telefono']}</td>";
    $tabla.="<td>{$registro['HabitacionesNormales']}</td>";
    $tabla.="<td>{$registro['HabitacionesVIP']}</td>";
    
    $tabla.="<td><a href=borrarH.php?id={$registro['IDhotel']}>Borrar</a></td>";
    $tabla.="<td><a href=editarH.php?id={$registro['IDhotel']}>Editar</a></td>";
    $tabla.='</tr>';
}
$tabla.='</table>';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>lista de hoteles</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Lista de Hoteles</div>
        <div class="contenido">
        <div class="tabla">
        <?php echo $tabla; ?>
        <p>
        <a href="registrarH.php">Registrar</a>
        </p><p>
        <a href="listaHoteles.php">Hoteles</a>
        </p><p>
        <a href="listavuelos.php">vuelos</a>
        </p>
        <p>
        <a href="lista.php">usuarios</a>
        </p>
        <p>
        <a href="agregarH.php">agregar</a>
        </p>
        <p>
        <a href="servicios.php">servicios</a>
        </p>
        </div>

        </div>
    </div>
</body>
</html>