<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/stylemodificarf.css" rel="stylesheet">
    <title>Modificación de Fichas</title>
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
                            <input class="form-control" type="number" min="9999" max="9999999999999" name="numero" autofocus value="" placeholder="Numero de la ficha" />
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
    $vnumero=$_POST['numero'];
    $miconexion=conectar_bd('', 'sena_crud');
    $resultado=consulta($miconexion,"select * from fichas where ficha_numero='{$vnumero}'");
    if($resultado->num_rows>0)
    { 
    $fila = $resultado->fetch_object(); 
    $_SESSION['ide1']=$fila->ficha_numero;
    ?>
    <form id="formulario2" role="form" method="post" action="actualizar_ficha.php">
        <div class="col-md-12">
            <strong class="lgris">Datos de la Ficha.</strong>
            <br>
            <label class="lgris">Numero de la ficha</label>
            <input class="form-control" type="text" name="ide" disabled="disabled" value="<?php echo $fila->ficha_numero ?>"/>
            <label class="lgris">Tipo de Programa.</label>
            <input class="form-control" style="text-transform:uppercase;" type="text" name="nombre" value="<?php echo $fila->ficha_progra ?>" required/>
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
