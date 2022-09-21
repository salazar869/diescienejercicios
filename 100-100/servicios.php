<?php
include('conexion.php');
$consulta = 'SELECT * FROM `controlador`';
$resultado = mysqli_query($conexion,$consulta);
$tabla =<<<FIN
<table>
<tr>
<th>IDcontrolador </th>
<th>idcliente </th>
<th>idsucursal </th>
<th>idHotel </th>
<th>idVuelo  </th>
<th>tipo de habitacio </th>
<th>tipo de Asiento</th>
<th>tiempo de viaje</th>
<th colspan="2"></th>

</tr>
FIN;

while($registro=mysqli_fetch_assoc($resultado)){
    $tabla.='<tr>';
    $tabla.="<td>{$registro['IDcontrolador']}</td>";
    $tabla.="<td>{$registro['idcliente']}</td>";
    $tabla.="<td>{$registro['idsucursal']}</td>";
    $tabla.="<td>{$registro['idHotel']}</td>";
    $tabla.="<td>{$registro['idVuelo']}</td>";
    $tabla.="<td>{$registro['habitacio']}</td>";
    $tabla.="<td>{$registro['Asiento']}</td>";
    $tabla.="<td>{$registro['tiempo']}</td>";
    
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
    <title>lista de servisios</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Lista de servicios</div>
        <div class="contenido">
        <div class="tabla">
        <?php echo $tabla; ?>
        <p>
        
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
        
        </div>

        </div>
    </div>
</body>
</html>