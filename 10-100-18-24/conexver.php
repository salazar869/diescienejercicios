<?php 
$host='localhost';
$user='root';
$pas='';
$base='dbinci';
$empleado='empleado';
$accion='accion';
$inci='incidente';
$con= mysqli_connect($host ,$user ,$pas ,$base) or die ('error');
$veruser= mysqli_query($con, "select * from $empleado") or die ("Error conexion". mysqli_error($conexion));
 ?>