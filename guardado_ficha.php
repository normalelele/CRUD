<?php
include('funciones.php');
    $vnumero=$_POST['numero'];
    $vprogra=$_POST['programa'];
    
    $miconexion=conectar_bd('', 'sena_crud');
    $resultado=consulta($miconexion,"insert into fichas (ficha_numero,ficha_progra) values ('{$vnumero}','{$vprogra}')");

    if($resultado);
    {
        echo "Guardado exitoso";
        header("refresh:2;crear_ficha.php");
    }
?>

