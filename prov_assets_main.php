<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos_config.css">
    <title>Contenido</title>
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
            <a href="prov_assets_main.php"><button><h3>Gestion de Assets</h3></button></a>
        </aside>
        <aside class="infobar">
            <?php 
            echo "Datos del usuario <br>" ;
            echo "Obtener informacion de la base de datos";
            
            ?>
        </aside>
        <main class="panel">
        <h3>Contenido disponible en la cuenta</h3>
            <?php // Consulta a BD para organizar el contenido asociado a la cuenta (usar variables de sesion)
            
            //Presentar el contenido 
            ?>

            <table>
                <?php 
                for($i=0; $i<=10; $i++){
                    echo "<tr><td>Asset $i</td><td>Categoria $i</td><td>Serie $i</td></tr>";
                }
                ?>
            </table>
        </main>

        <footer class="footer">
        ¿Necesitas ayuda? Contactanos en el <a href="www.onplay.mx">Sitio oficial Onplay</a>
        </footer>
    </div>
</body>
</html>