<?php

echo $origen = !empty  ($_POST['c0'])? $_POST['c0'] : '';
echo $destino = !empty	($_POST['c1'])? $_POST['c1'] : '';
echo $fechahora = !empty		($_POST['c2'])? $_POST['c2'] : '';
echo $normal = ! empty($_POST['c3'])? $_POST['c3']: '';
echo $VIP = ! empty     ($_POST['c4'])? $_POST['c4'] : '';



	if($origen&&$destino&&$fechahora&&$normal&&$VIP){
    include('conexion.php');
    $consulta="INSERT INTO `vuelos`(`IDvuelos`, `origen`, `destino`, `fechaHora`, `asientosNormales`, `asientosVIP`) VALUES ('','$origen','$destino','$fechahora','$normal','$VIP')";

    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo agregar el registro');
       
    }
}
header('Location: listavuelos.php');