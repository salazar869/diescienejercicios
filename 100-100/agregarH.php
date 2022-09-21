<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>agregar Usuario</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">agregar Usuario</div>
        <div class="contenido">
            <form action="agregaH.php" method='post'>

            <label for="i0">IDcliente</label>
            <input type="text" id="i0" name="c0">
            <br>
            <label for="i1">IDsucursal </label>
            <input type="text" id="i1" name="c1">
            <br>
            <label for="i2">IDHotel </label>
            <input type="text" id="i2" name="c2">
            <br>
            <label for="i3">IDVuelo </label>
            <input type="text" id="i3" name="c3">
            <br>
            <label for="i4">tipo de habitacio</label>
            <input type="text" id="i4" name="c4" placeholder="Normal o VIP">
            <br>
            <label for="i5">tipo de asiento</label>
            <input type="text" id="i5" name="c5" placeholder="Normal o VIP">
            <br>
            <label for="i6">tiempo de viaje</label>
            <input type="text" id="i6" name="c6" placeholder="# semana">
            <br>
            
            <input type="submit" value="registrar">
            </form>

        </div>
    </div>
</body>
</html>