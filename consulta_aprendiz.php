<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/styleconsultaa.css" rel="stylesheet">
    <title>Consultar Aprendiz</title>
</head>
<body>
<div id="divconsulta" class="container">
    <br>
    <div id="div2"> 
        <div id="div3" >
            <form name="formulario" role="form" method="post">
                <div class="col-md-12">
                    <strong class="lgris">Ingrese criterio de busqueda.</strong>
                    <br><br>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                        <input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACIÓN" />
                        </div>
                        <br>
                        <div class="form-group col-md-3"> 
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="Nombres" />
                            </div>
                            <br>
                            <div class="form-group col-md-3">
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" />
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
$vnumid=$_POST['numid'];
$vnombres=$_POST['nombres'];
$vapellidos=$_POST['apellidos'];
$miconexion=conectar_bd('', 'sena_crud');
$resultado=consulta($miconexion,"select * from aprendices where 
trim(apre_Numid) like '%{$vnumid}%' and (trim(apre_Nombres) like '%{$vnombres}%' and trim(apre_Apellidos) like '%{$vapellidos}%')");
if($resultado->num_rows>0)
{ 
while ($fila = $resultado->fetch_object())
{
    echo $fila->apre_id." ".$fila->apre_tipoid." ".$fila->apre_numid." ".$fila->apre_nombres." ".$fila->apre_apellidos." ".$fila->apre_direccion." ".$fila->apre_telefono." ".$fila->apre_ficha."<br>";
}
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
</html


