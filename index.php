<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/stylesesion.css" rel="stylesheet">
    <title>CRUD</title>
</head>
<body>
    <div id="div1" class="container">
        <div id="div2">
            <img src="">
            <div id="div3">
                <form id="formulario" method="post" action="menu.php">
                    <br>
                    <strong class="lgris">Iniciar Sesión</strong>
                    <br><br>
                    <label for="usuario" class="lgris"></label>
                    <br>
                    <input id="usuario" type="text" name="usuario" value="" placeholder="Usuario"  required/>
                    <br>
                    <label for="clave"class="lgris"></label>
                    <br>
                    <input id="clave" type="password" name="clave" value="" placeholder="Contraseña" required/>
                    <br>
                    <br>
                    <br>
                    <br>
                    <input class="btn btn-primary btn-lg" type="submit" value="Iniciar sesión">
                    <br>
                    <br>
                </form>
                <img id="sena" src="./images/sena.png" alt="Logo Sena">
            </div>
        </div>
    </div>
    <br>
    <br>
</body>
</html>
