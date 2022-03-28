<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/stylecrearaprendiz.css" rel="stylesheet">
    <title>Regristro de aprendices</title>
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
    <form id="formulario" role="form" method="post" action="guardado_aprendiz.php">
        <div class="col-md-12">
            <strong class="lgris">INGRESE LOS DATOS DEL APRENDIZ</strong>
            <br>
            <br>
    <label for="numid" class="lgris">Identificación</label>
    <div class="form-row">
        <div class="form-group col-xs-2">
            <select class="form-control" name="tipoid">
                <option value="CC" selected>CC</option>
                <option value="TI" selected>TI</option>
                <option value="RC" selected>RC</option>
                <option value="PEP" selected>PEP</option>
            </select>
        
        </div>
            <div class="form-group col-xs-2">
                <input id="numid" class="form_control input-lg" type="number" name="numid" min="9999" max="999999999999" value="" placeholder="IDENTIFICACIÓN" requerid/><br>
            </div>
    </div>
    <br>
    <label for="nombres"class="lgris">Nombre</label>
    <input id="nombres" class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required/><br>

    <label for="apellidos" class="lgris">Apellidos</label>
    <input id="apellidos" class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" required/><br>

    <label for="direccion" class="lgris">Dirección</label>
    <input id="direccion" class="form-control" style="text-transform:uppercase;" type="text" name="direccion" value="" placeholder="Dirección" required/><br>

    <label for="telefono" class="lgris">Teléfono</label>
    <input id="telefono" class="form-control" style="text-transform:uppercase;" type="number" name="telefono" value="" min="9999" max="999999999999" placeholder="Teléfono" required/><br>

    <label for="ficha" class="lgris">Ficha</label>
    <input id="ficha" class="form-control" style="text-transform:uppercase;" type="number" name="ficha" value="" min="9999" max="999999999999" placeholder="Ficha" required/><br>
    
    <input class="btn btn-primary btn-lg" type="submit" value="Guardar">
    
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
