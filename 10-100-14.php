<!DOCTYPE html>
<html>
<head>
	<title>numeros procedurales (aleatorios) x6</title>
</head>
<body bgcolor="#ffedb8">
	<font color="#000" >
<center><h1>
<?php  
$rifa=rand(100000,999999);
$num0=rand(1,9);
$num1=rand(1,9);
$num2=rand(1,9);
$num3=rand(1,9);
$num4=rand(1,9);
$num5=rand(1,9);
$numero=$num0.$num1.$num2.$num3.$num4.$num5;
	//echo $numero;
	//echo "<br>";
	//echo $rifa;
if ($numero == $rifa) {
	echo "felisidades has ganado";
}elseif ($numero>=$rifa) {
	echo "casi ganas";
	echo "<br>";
	echo "tu numeor es mucho superior es : ".$numero;
	echo "<br>";
	echo "y el numero gandor es: ".$rifa;
}else{
	echo "casi ganas";
	echo "<br>";
	echo "tu numeor es mucho inferior es : ".$numero;
	echo "<br>";
	echo "y el numero gandor es: ".$rifa;
}

 ?>
 </center></h1>
</body>
</html>
