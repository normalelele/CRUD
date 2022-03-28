<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/styleconsultaf.css" rel="stylesheet">
    <title>Consultar Ficha</title>
</head>
<body>
<div id="divconsulta" class="container">
    <br>
    <div id="div2"> 
        <div id="div4" >
            <form name="formulario" role="form" method="post">
                <div class="col-md-12">
                    <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA.</strong>
                    <br><br>
                    <div class="form-row">
                        <br>
                        <div class="form-group col-md-3"> 
                            <input class="form-control" type="number" name="numero" min="9999" max="99999999999999999" value="" placeholder="Numero de ficha" />
                            </div>
                            <br>
                            <div class="form-group col-md-3">
                                <input class="form-control" style="text-transform:uppercase;" type="text" name="programa" value="" placeholder="1-VIRTUAL  2-PRESENCIAL  3-MIXTO" />
                            <div>
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
$vnumero=$_POST['numero'];
$vprogra=$_POST['programa'];
$miconexion=conectar_bd('', 'sena_crud');
$resultado=consulta($miconexion,"select * from fichas where trim(ficha_numero) like '%{$vnumero}%' and (trim(ficha_progra) like '%{$vprogra}%')");
if($resultado->num_rows>0)
{ 
while ($fila = $resultado->fetch_object())
{
    echo $fila->ficha_numero." ".$fila->ficha_progra."<br>";
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

