<?php
    $conex = mysqli_connect ("localhost", "root", "" ,"escuela");

    if (!$conex){
        echo "Error: No se pudo conectar a MySQL" . 'PHP_EQL';
        echo "errno de depuración: " . mysqli_connect_errno() . 'PHP_EQL';
        echo "errno de depuración: " . mysqli_connect_error() . 'PHP_EQL';
        exit;
    }
?>