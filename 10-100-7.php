<!DOCTYPE html>
<html>
<head>
	<title>suma avanzada</title>
</head>
<body>
	<form action="10-100-7.php" method='post'>

            <label for="i0">numero 1</label>
            <input type="text" id="i0" name="c0">
            <br>
            <label for="i1">numero 2</label>
            <input type="text" id="i1" name="c1">
            <br>
            <input type="submit" value="calcular">
            <br>
    </form>
    <?php 
	
		$a = !empty  ($_POST['c0'])? $_POST['c0'] : '';
        $b = !empty  ($_POST['c1'])? $_POST['c1'] : '';
        $suma = $a+$b;
        echo "la suma es de: ".$suma;
	?>
</body>
</html>