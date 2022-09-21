<?php
include('conexion.php');
$consulta = 'SELECT * FROM `cliente`';
$resultado = mysqli_query($conexion,$consulta);
$tabla =<<<FIN
<table>
<tr>
<th>IDcliente </th>
<th>idsucursal </th>
<th>nombre</th>
<th>apellido</th>
<th>direccion</th>
<th>telefono</th>
<th colspan="2">Accion</th>
 </tr>
FIN;

while($registro=mysqli_fetch_assoc($resultado)){
    $tabla.='<tr>';
    $tabla.="<td>{$registro['IDcliente']}</td>";
    $tabla.="<td>{$registro['idsucursal']}</td>";
    $tabla.="<td>{$registro['nombre']}</td>";
    $tabla.="<td>{$registro['apellido']}</td>";
    $tabla.="<td>{$registro['direccion']}</td>";
    $tabla.="<td>{$registro['telefono']}</td>";
    
    $tabla.="<td><a href=borrar.php?id={$registro['IDcliente']}>Borrar</a></td>";
    $tabla.="<td><a href=editar.php?id={$registro['IDcliente']}>Editar</a></td>";
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
    <title>lista</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Lista de usuarios</div>
        <div class="contenido">
        <div class="tabla">
        <?php echo $tabla; ?>
        <p>
        <a href="registrar.php">Registrar</a>
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