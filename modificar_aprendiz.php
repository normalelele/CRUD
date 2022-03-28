<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/stylemodificara.css" rel="stylesheet">
    <title>Modificacion de Aprendices</title>
</head>
<body>
    <div id="divconsulta" class="container">
        <br>
        <div id="div2">
            <div id="div4">
                <form name="formulario" role="form" method="post">
                    <div class="col-md-12">
                        <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA.</strong>
                        <br><br>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <input class="form-control" type="number" name="numid" min="9999" max="9999999999999" autofocus value="" placeholder="IDENTIFICACIÓN" />
                            </div>
                            <br>
                                <div class="form-group col-md-3">
                                <input class="btn btn-primary btn-lg" type="submit" value="Consultar">
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
    $vnumid=$_POST['numid'];
    $miconexion=conectar_bd('', 'sena_crud');
    $resultado=consulta($miconexion,"select * from aprendices where apre_numid='{$vnumid}'");
    if($resultado->num_rows>0)
    { 
    $fila = $resultado->fetch_object(); 
    $_SESSION['ide1']=$fila->apre_id;
    ?>
    <form id="formulario2" role="form" method="post" action="actualizar_aprendiz.php">
        <div class="col-md-12">
            <strong class="lgris">Datos del aprendiz</strong><br>
            <label class="lgris">ID</label>
            <input class="form-control" type="text" name="ide" disabled="disabled" value="<?php echo $fila->apre_id ?>"/>
            <label class="lgris">Nombres</label>
            <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" required value="<?php echo $fila->apre_nombres ?>"/>
            <label class="lgris">Apellidos</label>
            <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="<?php echo $fila->apre_apellidos ?>" required/>
            <label class="lgris">Dirección</label>
            <input class="form-control" style="text-transform:uppercase;" type="text" name="direccion" value="<?php echo $fila->apre_direccion ?>" required/>
            <label class="lgris">Teléfono</label>
            <input class="form-control" type="number" name="telefono" min="9999" max="9999999999999" value="<?php echo $fila->apre_telefono ?>" required/>
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














