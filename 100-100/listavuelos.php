<?php
include('conexion.php');
$consulta = 'SELECT * FROM `vuelos`';
$resultado = mysqli_query($conexion,$consulta);
$tabla =<<<FIN
<table>
<tr>
<th>IDvuelos </th>
<th>origen </th>
<th>destino</th>
<th>fechaHora</th>
<th>asientos Normales</th>
<th>asientos VIP</th>
<th colspan="2">Accion</th>
 </tr>
FIN;

while($registro=mysqli_fetch_assoc($resultado)){
    $tabla.='<tr>';
    $tabla.="<td>{$registro['IDvuelos']}</td>";
    $tabla.="<td>{$registro['origen']}</td>";
    $tabla.="<td>{$registro['destino']}</td>";
    $tabla.="<td>{$registro['fechaHora']}</td>";
    $tabla.="<td>{$registro['asientosNormales']}</td>";
    $tabla.="<td>{$registro['asientosVIP']}</td>";
    
    $tabla.="<td><a href=borrarV.php?id={$registro['IDvuelos']}>Borrar</a></td>";
    $tabla.="<td><a href=editarV.php?id={$registro['IDvuelos']}>Editar</a></td>";
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
    <title>lista de vuelo</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Lista de vuelos</div>
        <div class="contenido">
        <div class="tabla">
        <?php echo $tabla; ?>
        <p>
        <a href="registrarv.php">Registrar</a>
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