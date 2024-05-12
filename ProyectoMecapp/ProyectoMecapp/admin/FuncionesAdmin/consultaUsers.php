<?php 
include("conecta.php");

$sql = 'SELECT * FROM clientes';
$result = mysqli_query($con,$sql);


$datos = array();

    if($result == TRUE)
    {
        while($filas = mysqli_fetch_assoc($result))
        {
            $datos[] = $filas;
        }
        echo json_encode($datos);
    }else {
        // La consulta falló
        echo "Error: " . mysqli_error($con);
    }


$con->close();


?>