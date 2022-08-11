<!DOCTYPE html>
<html>
<head>
	<title>calcular el area de un triangulo</title>
</head>
<body>
	<form action="10-100-9.php" method='post'>

            <label for="i0">alto</label>
            <input type="text" id="i0" name="c0">
            <br>
            <label for="i1">base</label>
            <input type="text" id="i1" name="c1">
            <br>
            <input type="submit" value="calcular">
            <br>
    </form>
    <?php 
	
		$a = !empty  ($_POST['c0'])? $_POST['c0'] : '';
        $b = !empty  ($_POST['c1'])? $_POST['c1'] : '';
        $calcular = ($a+$b)/2;
        echo "el area del triangulo es de: ".$calcular;
	?>
</body>
</html>