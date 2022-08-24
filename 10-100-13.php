<!DOCTYPE html>
<html>
<head>
	<title>numeros procedurales (aleatorios)</title>
</head>
<body bgcolor="#ffedb8">
	<font color="#000" >
<center><h1>
<?php 
$num=rand(1,100);
if ($num == 50) {
	echo "es igual a 50";
}elseif ($num>=50) {
	echo "es mayor a 50";
	echo "<br>";
	echo "tu numero es: ".$num;
}else {
	echo "es menor a 50";
	echo "<br>";
	echo "tu numero es: ".$num;
}
 ?>
</center></h1>
</body>
</html>
