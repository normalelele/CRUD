<?php
include('funciones.php');
session_start();
$vide=$_SESSION['ide1'];
$vnombre=$_POST['nombre'];

$miconexion=conectar_bd('','sena_crud');
$resultado=consulta($miconexion,"update programa set progra_nombre='{$vnombre}',',progra_id='{$vide}')");

if ($miconexion->affected_rows>0)
{
    echo "Actualización exitosa";
}
?>

