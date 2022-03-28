<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/stylecrearf.css" rel="stylesheet">
    <title>Regristro de Fichas</title>
</head>
<body>
    <div id="div1" class="container">
        <br>
        <div id="div2">
            <?php session_start(); if(! empty($_SESSION['Tipo_usuario']))
            { ?> <img src=""> <?php } ?>
            <div id="div3">
<?php
if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
{
    ?>
    <form id="formulario" role="form" method="post" action="guardado_ficha.php">
        <div class="col-md-12">
            <strong class="lgris">INGRESE LOS DATOS DE LA FICHA.</strong>
            <br><br>
                <label for="nombre" class="lgris">NUMERO DE LA FICHA</label>
                <input id="nombre" class="form-control" type="number" name="numero" min="9999" max="999999999999" value="" placeholder="N° de ficha" required/>
                <br>
                <label for="tipo" class="lgris">NOMBRE DEL PROGRAMA</label>
                <?php
                include('funciones.php');
                $miconexion=conectar_bd('','sena_crud');
                $resultado=consulta($miconexion,"select * from programa");
                ?>
                <select name="programa">
                    <?php
                    while($fila=$resultado->fetch_object())
            
                        {
                            ?>
                            <option value="<?php echo $fila->progra_id ?>"><?php echo $fila->progra_nombre ?></option>
                            <?php
                        }
                    ?>
                </select> 
                <br>
                <br>
                <input class="btn btn-primary" type="submit" value="Guardar">
                <div class="position-absolute">
                    <input class="btn btn-primary" type="botton" onclick="location.href='menu.php'" value="volver">
                </div>
        </div>
    </form>
<?php
}
else
{
    echo "No tienes permisos para realizar esta acción";
}
//id="tipo" class="form-control" type="text" name="programa" value="" placeholder="" required/>
?>
<br>
</div>
</div>
</div>
</body>
</html>
