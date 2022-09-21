<?phP
//dado el caso de tener distinta base de datos o otros ususrios se cambian como variables
    $user = "root";
    $pass = "";
    $host = "localhost";
    $datab = "agencias";
    $conexion = mysqli_connect($host, $user, $pass, $datab);
    if(mysqli_connect_error()){
        die('No se puede conectar a la base de datos'.mysqli_connect_error());
    }
?>