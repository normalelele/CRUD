<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/stylemodificarp.css" rel="stylesheet">
    <title>Modificacion de programas</title>
</head>
<body>
    <div id="divconsulta" class="container">
        <br>
        <div id="div2">
            <div id="div4">
                <form name="formulario" role="form" method="post">
                    <div class="col-md-12">
                        <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA</strong>
                        <br><br>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <input class="form-control" type="text" name="nombre" autofocus value="" placeholder="Nombre del programa" />
                            </div>
                            <br>
                                <div class="form-group col-md-3">
                                <input class="btn btn-primary" type="submit" value="Consultar">

                                <div class="position-absolute">
                                    <input class="btn btn-primary" type="botton" onclick="location.href='menu.php'" value="volver">
                                </div>

                                </div>
                        </div>
                        <br>
                    </div>
                </form>
        <br>
    </div>
    <div id="divconsulta2">
    <?php
    if ($_SERVER['REQUEST_METHOD']==='POST')
    {
    include('funciones.php');
    session_start();
    $vnombre=$_POST['nombre'];
    $miconexion=conectar_bd('', 'sena_crud');
    $resultado=consulta($miconexion,"select * from programa where progra_nombre='{$vnombre}'");
    if($resultado->num_rows>0)
    { 
    $fila = $resultado->fetch_object(); 
    $_SESSION['ide1']=$fila->progra_id;
    ?>
    <form id="formulario2" role="form" method="post" action="actualizar_programa.php">
        <div class="col-md-12">
            <strong class="lgris">Datos del programa</strong><br>
            <label class="lgris">ID</label>
            <input class="form-control" type="text" name="ide" disabled="disabled" value="<?php echo $fila->progra_id ?>"/>
            <label class="lgris">Nombre</label>
            <input class="form-control" style="text-transform:uppercase;" type="text" name="nombre" required value="<?php echo $fila->progra_nombre ?>"/>
            <br>
            <input class="btn btn-primary" type="submit" value="Actualizar" >
            <br>
        </div>
    </form>
    <?php
    }
    else
    {
        echo "No existen registros";
    }
    $miconexion->close();
    }?>
</div>
</div> 
</div> 
</body>
</html>
