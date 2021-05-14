<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos_config.css">
    <title>Modificar Carrusel</title>
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
                        <td><b> Selecciona la categoria</b></td>
                        <td>
                            <select name="categoria" id="categoria">
                            <option value="">Acccion</option>
                            <option value="">Drama</option>
                            </select><br>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr><td><b> Assets de video en la categoria</b></td></tr>
                </table>
                
                <table class="tabla_datos">
                    <th>Seleccionar</th>
                    <th>Asset</th>
                        
                    <tr> <?php //Insertar bucle for para imprimir la lista de assets de la categoria?>
                        <td><input type="checkbox" name="" id=""></td>    
                        <td>Video1.mkv</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td> 
                        <td>Video2.mkv</td>
                    </tr>
                </table><br>
                <input type="submit" value="Aplicar"> 
            </form>

        </main>

        <footer class="footer">
        ¿Necesitas ayuda? Contactanos en el <a href="www.onplay.mx">Sitio oficial Onplay</a>
        </footer>
    </div>
</body>
</html>