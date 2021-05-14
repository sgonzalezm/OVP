<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos_config.css">
    <title>Crear carrusel</title>
</head>
<body>
<div class="contenedor">
        <header class="header">
            <a href="index.html"><button><h3>Inicio</h3></button></a>
            <a href="workflow.php"><button><h3>Workflow</h3></button></a>
            <a href="prov_ingesta_crear.php"><button><h3>Ingesta</h3></button></a>
            <a href="prov_carrusel_crear.php"><button><h3>Carruseles</h3></button></a>
            <a href="prov_assets_main.php"><button><h3>Contenido</h3></button></a>
            <a href="gestion_usuario.php"><button><h3>Usuarios</h3></button></a>
        </header>

        <div class="logout">
                <a href="logout.php">Logout</a>
            </div>

        <aside class="sidebar">
            <a href="prov_carrusel_crear.php"><button><h3>Crear Carrusel</h3></button></a>
            <a href="prov_carrusel_mod.php"><button><h3>Modificar Carrusel</h3></button></a>
            <a href="prov_carrusel_del.php"><button><h3>Eliminar Carrusel</h3></button></a>
        </aside>
        <aside class="infobar">
            <?php 
            echo "Datos del usuario <br>" ;
            echo "Obtener informacion de la base de datos";
            
            ?>
        </aside>
        <main class="panel">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><b> Nombre de categoria</b></td>
                        <td><input type="text" name="categoria" placeholder="Accion, Drama, etc..."></td>
                    </tr>
                    <tr>
                        <td><b> Prioridad</b></td>
                        <td><input type="text" name="prioridad" placeholder="1 mayor prioridad"></td>
                        <?php //Validar si ya existe esa prioridad , preguntar al usuario si acepta o cambia el valor , si acepta se modifican los valores actuales de prioridad de sus carruseles?>
                    </tr>
                    <tr>
                        <td><b> Scroll lateral</b></td>
                        <td><input type="text" name="scroll" placeholder="Maximo 30"></td>
                    </tr>
                    <tr>
                        <td><b> Agregar asset(s)</b></td>
                        <td><input type="file" name="asset" id="assets"></td>
                    </tr>
                </table> 
                <input type="submit" value="Aplicar">          
            </form>
        </main>

        <footer class="footer">
        ¿Necesitas ayuda? Contactanos en el <a href="www.onplay.mx">Sitio oficial Onplay</a>
        </footer>
    </div>

    
</body>
</html>