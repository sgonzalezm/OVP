<?php 
include("conexion.php"); //Conexion con la base de datos
if(!empty($_POST)){
    $captcha = $_POST['g-recaptcha-response'];
    $secret = "6Lex0cYaAAAAACpEpWiM9h1wYoJQxtuPsH_QI77I";
    $nivel = 3;
    if(isset($_POST['enviar'])){ //Valida que se enviara el formulario por medio de submit
        if($captcha){
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
            var_dump($response);
            $array_json =json_decode($response, TRUE);
            if($array_json['success']){
                if(validar_clave($_POST['password'],$error_encontrado)){ //Valida que el password cumpla con la estructura requerida
                $usuario = $_POST['usuario'];
                $correo = $_POST['correo'];
                $password = PASSWORD_HASH($_POST['password'],PASSWORD_DEFAULT);
                $password_conf = $_POST['password_conf']; 
                            if($password == $password_conf){ //Validacion para checar si coincide el password y la validacion del mismo
                            $sql="INSERT INTO `usuario_final`(`nivel`,`correo`, `usuario`, `password`) VALUES (:nivel, :correo, :usuario, :password)";
                            $sql = $con->prepare($sql);
                            $sql->bindParam(':nivel',$nivel,PDO::PARAM_INT);
                            $sql->bindParam(':correo',$correo,PDO::PARAM_STR, 50);
                            $sql->bindParam(':usuario',$usuario,PDO::PARAM_STR);
                            $sql->bindParam(':password',$password,PDO::PARAM_STR);
                            $sql->execute();

                            $lastInsertId = $con->lastInsertId();
                            
                                        if($lastInsertId>0){

                                        echo "<div class='content alert alert-primary' > Gracias .. Tu Nombre es : $usuario  </div>";
                                        }
                                        else{
                                        echo "<div class='content alert alert-danger'> No se pueden agregar datos, comuníquese con el administrador  </div>";
                                        print_r($sql->errorInfo()); 
                                        }
                            }else{echo "El password y la validacion no coinciden";}    
                }else{echo "PASSWORD NO VÁLIDO: " . $error_encontrado;}
            }else{echo "Google menciona que el captcha no es valido, no seas bot!!!";}
        }else{echo "No te olvides del captcha";}
    }else{echo "Formulario no valido";}
}
//Funcion para la validacion de estructura de la contraseña
function validar_clave($password,&$error_clave){
    if(strlen($password) < 6){
       $error_clave = "La contraseña debe tener al menos 6 caracteres";
       return false;
    }
    if(strlen($password) > 49){
        $error_clave = "La contraseña debe tener como maximo 50 caracteres";
        return false;
     }
    if (!preg_match('`[a-z]`',$password)){
       $error_clave = "La contraseña debe tener al menos una letra minúscula";
       return false;
    }
    if (!preg_match('`[A-Z]`',$password)){
       $error_clave = "La contraseña debe tener al menos una letra mayúscula";
       return false;
    }
    if (!preg_match('`[0-9]`',$password)){
       $error_clave = "La contraseña debe tener al menos un caracter numérico";
       return false;
    }
    $error_clave = "";
    return true;
 }



?>