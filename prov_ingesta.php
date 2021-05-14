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
            <a href="prov_ingesta.php"><button><h3>Ingesta</h3></button></a>
            <a href="prov_carrusel.php"><button><h3>Carruseles</h3></button></a>
            <a href="gestion_assets.php"><button><h3>Contenido</h3></button></a>
            <a href="gestion_usuario.php"><button><h3>Usuarios</h3></button></a>
            <img src="ASSETS/logo.png" alt="" width="20" heigh="20">
        </header>

        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>

        <aside class="sidebar">
            <a href="prov_ingesta.php"><button><h3>Ingesta</h3></button></a>
            <a href="prov_publicacion.php"><button><h3>Publicacion</h3></button></a>
            <a href="prov_carrusel_crear.php"><button><h3>Carruseles</h3></button></a>
            <a href="gestion_assets.php"><button><h3>Contenido</h3></button></a>
            <a href="gestion_usuario.php"><button><h3>Usuarios</h3></button></a>
        </aside>
        <aside class="infobar">
            <?php 
            echo "Datos del usuario <br>" ;
            echo "Obtener informacion de la base de datos";
            
            ?>
        </aside>

        <main class="panel">
            <form action="" method="POST">
            <b>Origen</b><input type="file" id="input"><br>
           
            <b>Destino</b><input type="file" value="Directorio" webkitdirectory directory multiple/>
            </form>

        </main>

        <footer class="footer">
            ¿Necesitas ayuda? Contactanos en el <a href="onplay.mx">Sitio oficial Onplay</a>
        </footer>
    </div>
</body>
</html>
<script> /*Script para validar la extension del archivo*/
var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
}
</script>