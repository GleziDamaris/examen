<?php
    require_once "conexion.php";
    
    $ciudad = $_POST ["ciudad"];

    if(!isset($correo) || empty($correo)){
        echo "Debes seleccionar tu ciudad";
    }

    $consulta = "select * from usuarios where ciudad = '$ciudad'";
    $resultado = mysqli_query ($conex, $consulta);
    $registros = mysqli_num_rows ($resultado);

    if ($registros > 0){
        echo "Eres de " . $ciudad;
    } else {
        echo "Elige tu ciudad";
    }
?>