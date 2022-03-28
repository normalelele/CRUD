<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/stylecrearp.css" rel="stylesheet">
    <title>Crear Programa</title>
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
    <form id="formulario" role="form" method="post" action="guardado_programa.php">
        <div class="col-md-12">
            <strong class="lgris">INGRESE LOS DATOS DEL PROGRAMA.</strong>
            <br>
            <br>
        <label for="nombre" class="lgris"><strong>NOMBRE DEL PROGRAMA</strong></label>
        <input id="nombre" class="form-control" style="text-transform:uppercase;" type="text" name="nombre" value="" placeholder="Nombre" required/>
        <br>
        <label for="tipo" class="lgris"><strong>TIPO DE PROGRAMA</strong></label>
        <input id="tipo" class="form-control" type="text" name="tipo" value="" placeholder="1-VIRTUAL  2-PRESENCIAL  3-MIXTO" required/>
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
?>
<br>
</div>
</div>
</div>
</body>
</html>

