<?php
session_start();
include("conexion.php");

//Variables para redireccionamiento a paginas de cada nivel de usuario
$url_admin = "admin_main";
$url_prov = "proveedor_main";
$url_usuario = "usuario_main";
$url_registro = "registro_completar";

if(isset($_POST['enviar'])){
  $usuario_form = $_POST["usuario"];
  $password_form = $_POST["password"];

  if($con!=null){
    $comando = $con->prepare("SELECT id,nivel,nombre,suscripcion FROM `usuario_final` WHERE usuario = :usuario AND password = :password");
    $comando->bindParam(':usuario', $usuario_form, PDO::PARAM_STR);
    $comando->bindParam(':password', $password_form, PDO::PARAM_STR);
    $comando->setFetchMode(PDO::FETCH_ASSOC);
    $comando->execute();
    $datos = $comando->fetch();
    
    if($datos){
      if($datos["id"] !=null){
      $_SESSION["id"]=$datos["id"];
      $_SESSION["nivel"]=$datos["nivel"];
      $_SESSION["nombre"]=$datos["nombre"];
      $_SESSION["password"]=$datos["password"];
      $_SESSION["suscripcion"]=$datos["suscripcion"];
      
      if($_SESSION["nombre"] != null){
      $nivel_usuario = $_SESSION['nivel'];
        if($nivel_usuario == 1){
          header("Location: $url_admin.php");
          die();
        }elseif($nivel_usuario == 2){
          header("Location: $url_prov.php");
          die();
        }elseif($nivel_usuario == 3){
          header("Location: $url_usuario.php");
          die();
        }else{echo "Nivel no valido";}
      }else{header("Location: $url_registro.php");}
      }else{echo "no existe el usuario";}
    }else{echo "No se obtuvieron datos validos";
      exit();
  }
  
  }else{echo "No funciona la conexion con la base de datos";}
}else{echo "algo fallo con el formulario";}
$con=null;
?>