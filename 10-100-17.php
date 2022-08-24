<!DOCTYPE html>
<html>
<head>
	<title>vectores</title>
</head>
<body bgcolor="#ffedb8">
<center>
<h1>array</h1>
<form action="" method="">
<?php 
$registro['dni']='1234';
$registro['nombre']= 'juan';
$registro['direccion']= 'carrera 8';
	echo $registro['nombre']. '<br>';
$registro2=array('1234','pedro','calle 15');
	echo $registro2[1]. '<br>';
$registro3=array('dni'=>'1234','nombre'=>'andres','direccion'=>'calle 15');
	echo $registro3['nombre']. '<br>';

foreach ($registro3 as $reg => $value) {
	echo 'para la clave: '.$reg.' almacene el valor de: '.$value.'<br>';
}

 ?>
 </form>
 </center>
</body>
</html>