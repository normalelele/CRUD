<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/styleconsultap.css" rel="stylesheet">
    <title>Consultas de programas</title>
</head>
<body>
<div id="divconsulta" class="container">
    <br>
    <div id="div2"> 
        <div id="div4" >
            <form name="formulario" role="form" method="post">
                <div class="col-md-12">
                    <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA</strong>
                    <br><br>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                        </div>
                        <div class="form-group col-md-3"> 
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="nombre" value="" placeholder="Nombre" />
                            </div>
                            <br>
                            <div class="form-group col-md-3">
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="tipo" value="" placeholder="1-VIRTUAL  2-PRESENCIAL  3-MIXTO" />
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
$vnombre=$_POST['nombre'];
$vtipo=$_POST['tipo'];
$miconexion=conectar_bd('', 'sena_crud');
$resultado=consulta($miconexion,"select * from programa where 
trim(progra_nombre) like '%{$vnombre}%' and (trim(progra_tipo) like '%{$vtipo}%')");
if($resultado->num_rows>0)
{ 
while ($fila = $resultado->fetch_object())
{
    echo $fila->progra_nombre." ".$fila->progra_tipo."<br>";
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

