<?php
include('funciones.php');
session_start();

if (!isset( $_SESSION['nusuario'])){ // codigo para el boton regresar 
    $_SESSION['nusuario']=$_POST['usuario']; 
    $_SESSION['nclave']=$_POST['clave'];
}

$miconexion=conectar_bd('', 'sena_crud');
$resultado=consulta($miconexion,"select * from usuarios where usua_nomuser='{$_SESSION['nusuario']}' and usua_contra='{$_SESSION['nclave']}'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/stylemenu.css" rel="stylesheet">

    <title>MENU</title>
</head>
<body class="bodygeneral">
    <div id="div1" class="container">
        <br>
        <div id="div2" class="container">
<?php
    if($resultado->num_rows>0) { ?> <img src=""> <?php } ?>
    <div id="div3">
<?php
    if($resultado->num_rows>0)
    {
        $fila = $resultado->fetch_object();
        $_SESSION['Tipo_usuario']=$fila->usua_tipo;
?>
    <br>
    <label class="lgris"><strong>BIENVENIDO <?php echo $_SESSION['nusuario'] ?></label></strong>
    <br>
    <br>

<input style="width:40%;" class="btn btn-primary btn-lg" type="button" onclick="location.href='crear_aprendiz.php'" value="Registro de Aprendices">
<input style="width:40%;" class="btn btn-primary btn-lg" type="button" onclick="location.href='consulta_aprendiz.php'" value="Consulta de Aprendices">
<br>
<br>
<input style="width:40%;" class="btn btn-primary btn-lg" type="button" onclick="location.href='modificar_aprendiz.php'" value="Actualización de Aprendices">
<input style="width:40%;" class="btn btn-primary btn-lg" type="button" onclick="location.href='borrar_aprendiz.php'" value="Eliminar Aprendices">
<br>
<br>
<input style="width:40%;" class="btn btn-primary btn-lg" type="button" onclick="location.href='crear_programa.php'" value="Crear Programa">
<input style="width:40%;" class="btn btn-primary btn-lg" type="button" onclick="location.href='consulta_programa.php'" value="Consultar Programa">
<br>
<br>
<input style="width:40%;" class="btn btn-primary btn-lg" type="button" onclick="location.href='modificar_programa.php'" value="Modificar Programa">
<input style="width:40%;" class="btn btn-primary btn-lg" type="button" onclick="location.href='borrar_programa.php'" value="Eliminar Programa">
<br>
<br>
<input style="width:40%;" class="btn btn-primary btn-lg" type="button" onclick="location.href='crear_ficha.php'" value="Crear Ficha">
<input style="width:40%;" class="btn btn-primary btn-lg" type="button" onclick="location.href='consulta_ficha.php'" value="Consultar Ficha">
<br>
<br>
<input style="width:40%;" class="btn btn-primary btn-lg" type="button" onclick="location.href='modificar_ficha.php'" value="Modificar Ficha">
<input style="width:40%;" class="btn btn-primary btn-lg" type="button" onclick="location.href='borrar_ficha.php'" value="Eliminar Ficha">

<?php
    }
else
{
    echo "El nombre de usuario o contraseña que ingresaste no pertenece a ninguna cuenta. Comprueba el nombre de usuario y vuelve a intentarlo.";
}
$miconexion->close();
?>
<br>
<br>
    </div>
        </div>
    </div>
</body>
</html>