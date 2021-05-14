<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos_config.css">
    <title>Ingesta</title>
</head>
<body>
    <div class="contenedor">
        <header class="header">
            <a href="index.html"><button><h3>Inicio</h3></button></a>
            <a href="workflow.php"><button><h3>Workflow</h3></button></a>
            <a href="prov_ingesta_crear.php"><button><h3>Ingesta</h3></button></a>
            <a href="prov_carrusel_crear.php"><button><h3>Carruseles</h3></button></a>
            <a href="prov_assets_main.php"><button><h3>Contenido</h3></button></a>
            <a href="prov_usuario.php"><button><h3>Usuarios</h3></button></a>
            <img src="ASSETS/logo.png" alt="" width="20" heigh="20">
        </header>

        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>

        <aside class="sidebar">
            <a href="prov_ingesta_crear.php"><button><h3>Ingresar Asset</h3></button></a>
            <a href="prov_ingesta_mod.php"><button><h3>Modificar Asset</h3></button></a>
            <a href="prov_ingesta_del.php"><button><h3>Eliminar Asset</h3></button></a>
        </aside>
        <aside class="infobar">
            <?php 
            echo "Datos del usuario <br>" ;
            echo "Obtener informacion de la base de datos";
            
            ?>
        </aside>

        <main class="panel">
            <h3>Ingresa la informacion del asset a ingestar:</h3>
            <form action="" method="POST">
                <table>
                <tr>
                <td><b>Origen</b></td>
                <td><input type="file" id="input"><br></td>
                </tr>
                <tr>
                <td><b>Nivel de acceso</b></td>
                <td><input type="text" id="nivel" name="nivel"><br></td>
                </tr>
                <tr>
                <td><b>Categoria</b></td>
                <td><select name="" id=""> <?php //Insertar el bucle para obtener las categorias en base de datos?></select><br></td>
                </tr>
                <?php //Insertar el codigo para obtener el dato de la sesion del proveedor que lo esta dado de alta y registrar el valor "Proveedor" puede ser en este u otro archivo PHP ?>
                <tr>
                <td><b>XML de metadatos</b></td>
                <td><input type="file" name="metadatos" id="metadatos"><br></td>
                </tr>
                <tr>
                <td><b>Bouquet de servicio</b></td>
                <td><select name="bouquet" id="bouquet"></select><br> <?php //Insertar bucle para mostrar las opciones de bouquet desde base de datos?></td>
                </tr>
                <tr>
                <td><b>Preproceso</b></td>
                <td><input type="checkbox" name="preproceso" id="preproceso" <?php //Si se requiere preproceso, abrir un select para ingresarlo, validar metodo en javascript?>><br></td>
                </tr>
                <tr>
                <td><b>Workflow</b></td>
                <td><select name="workflow" id="workflow"></select><br></td>
                </tr>
                </table>
                <input type="submit" value="Aplicar">    
            </form>
        </main>

        <footer class="footer">
            ¿Necesitas ayuda? Contactanos en el <a href="onplay.mx">Sitio oficial Onplay</a>
        </footer>
    </div>
</body>
</html>
<script> /*Script para validar la extension del archivo*/

</script>