<?php
include('funciones.php');
session_start();
$vnumero=$_POST['numero'];
$vprogra=$_POST['programa'];

$miconexion=conectar_bd('','sena_crud');
$resultado=consulta($miconexion,"update fichas set ficha_numero='{$vnumero}',ficha_progra='{$vprogra}'");

if ($miconexion->affected_rows>0)
{
    echo "Actualización exitosa";
}
?>
