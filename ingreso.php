<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="CSS/estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0
    maximon-scale=1.0, minimun-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header class="header">
        <a href="index.html"><button><b> Inicio</b></button></a>
        <a href="ingreso.php"><button><b> Ingreso</b></button></a>
        <a href="registro.php"><button><b> Registro</b></button></a>
    </header>
    <div class="registro_div">
        <form action="validacion_ingreso.php" method="post">
        <h2>Ingreso</h2><br>
        <img src="ASSETS/logo.png" width="100" height="100"><br>
        <input type="text" name="usuario" id="usuario" placeholder="usuario"><br><br>
        <input type="password" name="password" id="password" placeholder="contraseña"><br><br>
        <p>Recordar usuario
            <input type="checkbox" name="recordar" id="Recordar usuario"><br><br>
        </p> 
        <input type="submit" name="enviar" value="Enviar"><br><br><br>
        <table><tr>
            <td><b><a href="registro.php">Registrarme</a></b></td>
            <td><a href="rec_password.php">Olvidé mi contraseña</a></td></tr></table>
        </form>
    </div>
    
</body>
</html>