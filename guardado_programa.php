<?php
include('funciones.php');
    $vnombre=$_POST['nombre'];
    $vtipo=$_POST['tipo'];

    $miconexion=conectar_bd('', 'sena_crud');
    $resultado=consulta($miconexion,"insert into programa (progra_nombre,progra_tipo) values ('{$vnombre}','{$vtipo}')");

    if($resultado);
    {
        echo "Guardado exitoso";
        header("refresh:2;crear_programa.php");
    }
?>