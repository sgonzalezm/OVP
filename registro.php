<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css">
    <title>Registro</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <header class="header">
        <a href="index.html"><button><b> Inicio</b></button></a>
        <a href="ingreso.php"><button><b> Ingreso</b></button></a>
        <a href="registro.php"><button><b> Registro</b></button></a>
    </header>
    <div class="registro_div">
        <form action="validacion_registro.php" method="POST">
        <h2>Registro de usuario</h2>
        <img src="ASSETS/logo.png" width="70" height="70"><br>
        <input type="text" name="usuario" id="usuario" placeholder="Usuario"><br>
        <input type="email" name="correo" id="correo" placeholder="Correo electronico"><br>
        <input type="password" name="password" id="password" placeholder="Contraseña"><br>
        <input type="password" name="password_conf" id="password_conf" placeholder="Confirma contraseña"><br>
        <div class="g-recaptcha" data-sitekey="6Lex0cYaAAAAAF3pa55li3o6GIQFx4sT2yr9MroF"></div><br>
        <input type="submit" name="enviar" value="Enviar"><br><br><br>
            <table><tr>
                <td><b><a href="index.html">Regresar</a></b></td>
                <td><a href="registro_prov.php"><button class="boton_prov">Proveedor de contenido</button></a></td></tr>
            </table>
        
        </form>
        
    </div>
</body>
</html>

<?php
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexion.php");

if(isset($_POST['enviar'])){
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $password_conf = $_POST['password_conf']; 
    if($password == $password_conf){
        $sql="INSERT INTO `usuario_final`(`correo`, `usuario`, `password`) VALUES (:correo, :usuario, :password)";
    
$sql = $con->prepare($sql);
    
$sql->bindParam(':correo',$correo,PDO::PARAM_STR, 50);
$sql->bindParam(':usuario',$usuario,PDO::PARAM_STR);
$sql->bindParam(':password',$password,PDO::PARAM_STR);
    
$sql->execute();

$lastInsertId = $con->lastInsertId();
if($lastInsertId>0){

echo "<div class='content alert alert-primary' > Gracias .. Tu Nombre es : $usuario  </div>";
header("Location: ingreso.php");
    die();
}
else{
    echo "<div class='content alert alert-danger'> No se pueden agregar datos, comuníquese con el administrador  </div>";

print_r($sql->errorInfo()); 
}
       
    }
}
/*$sql= "INSERT INTO `usuario_final`(`correo`, `usuario`, `password`) VALUES (:correo, :usuario, :password)";
$sql= "INSERT INTO `usuario_final`(`correo`, `usuario`, `password`) VALUES (?, ?, ?)";

if($sql = $con->prepare($sql)){

$sql->bindParam(':correo',$correo,PDO::PARAM_STR, 50);
$sql->bindParam(':usuario',$usuario,PDO::PARAM_STR);
$sql->bindParam(':password',$password,PDO::PARAM_STR);

$sql->execute();
}else{
    $error = $con->errno . ' ' . $con->error;
    echo $error; // 1054 Unknown column 'foo' in 'field list'
}
$lastInsertId = $connect->lastInsertId();
if($lastInsertId>0){

echo "<div class='content alert alert-primary' > Gracias .. Tu Nombre es : $usuario  </div>";
}
else{
    echo "<div class='content alert alert-danger'> No se pueden agregar datos, comuníquese con el administrador  </div>";

print_r($sql->errorInfo()); 
}

}
}else{
    echo "el password no coincide";
}*/
/*
 if($dbh!=null){

            $sql= $con->prepare("INSERT INTO `usuario_final`(`correo`, `usuario`, `password`) VALUES (?, ?, ?)");
            $sql->bindParam(1,utf8_decode($correo));
            $sql->bindParam(2,utf8_decode($usuario));
            $sql->bindParam(3,utf8_decode($password));

            $sql->execute();
            $con=null;
        }else{
            echo "no hay conexion con la base de datos";
        }
*/
?>


