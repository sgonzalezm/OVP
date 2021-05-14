<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="CSS/estilos_usuario.css">
    <title>Usuario Main</title>
</head>
<body>
<?php

if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $nivel = $_SESSION['nivel'];
    $nombre = $_SESSION['nombre'];
    $suscripcion = $_SESSION['suscripcion'];
}
/*
Hacer el query a la base de datos con las variables de sesion del cliente usuario final
el query debera buscar el valor del usuario del cliente y mostrar las categorias del nivel de servicio al que esta asociado

*/ 
?>

<div class="info_usuario">
    <h3>Usuario actual:</h3>
<?php
if($suscripcion == 1){
    $suscripcion_usuario = "Basica Gratuita";
}elseif($suscripcion == 2){
    $suscripcion_usuario = "Avanzada";
}elseif($suscripcion == 3){
    $suscripcion_usuario = "Premium";
}

echo "ID de usuario: $id <br>";
echo "Nombre: $nombre <br>";
echo "Suscripcion actual: $suscripcion_usuario <br>";
?>
<div class="logout">
    <a class="link_logout" href="logout.php">Cerrar Sesion</a> 
</div>

</div>
<div class="netflix-slider">
    <h2>  Demos<?php//Aqui incluir la impresion de la variable de categoria por orden ?></h2>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="ASSETS/Poster/Big-Buck-Bunny.png" alt="Big Buck Bunny"></div>
            <div class="swiper-slide"><img src="ASSETS/Poster/Accion.png" alt="Accion Policiaca"></div>
            <div class="swiper-slide"><img src="ASSETS/Poster/Explosion.png" alt="Explosiones"></div>
            <div class="swiper-slide"><img src="ASSETS/Poster/Naturaleza.png" alt="Naturaleza"></div>
            <div class="swiper-slide"><img src="ASSETS/Poster/Big-Buck-Bunny.png" alt="Big Buck Bunny"></div>
            <div class="swiper-slide"><img src="ASSETS/Poster/Accion.png" alt="Accion Policiaca"></div>
            <div class="swiper-slide"><img src="ASSETS/Poster/Explosion.png" alt="Explosiones"></div>
            <div class="swiper-slide"><img src="ASSETS/Poster/Naturaleza.png" alt="Naturaleza"></div>
        </div>
    <!-- Add Pagination -->
    <!-- <div class="swiper-pagination"></div> -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<div class="netflix-slider">
    <h2>  Drama<?php//Aqui incluir la impresion de la variable de categoria por orden ?></h2>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="ASSETS/Poster/Big-Buck-Bunny.png" alt="Big Buck Bunny"></div>
            <div class="swiper-slide"><img src="ASSETS/Poster/Accion.png" alt="Accion Policiaca"></div>
            <div class="swiper-slide"><img src="ASSETS/Poster/Explosion.png" alt="Explosiones"></div>
            <div class="swiper-slide"><img src="ASSETS/Poster/Naturaleza.png" alt="Naturaleza"></div>
        </div>
    <!-- Add Pagination -->
    <!-- <div class="swiper-pagination"></div> -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 6,
      spaceBetween: 10,
      slidesPerGroup: 2,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>
</html>

<?php
//Codigo para utilizacion de arrays para llenar los sliders desde la base de datos:
/*

//Array para la ubicacion del video
let movies = [
    {title : "Inception", imageUrl: "add image url"},
    {title : "Sons of Anarchy", imageUrl: "add image url"}
  ];
 //Funcion para mostrar los elementos en pantalla:
 function myFunction() {
    let result = "";
    movies.forEach(function (item) {
      result += "<div class='swiper-slide'><img src='"+ item.imageUrl +"' alt='alt text'> " + item.title + " ";
    });
    
    document.getElementById("listMovies").innerHTML = result;
  }
  
  myFunction();

  //Ubicacion en la que se insertaran los elementos:
  <div id="listMovies" class="swiper-wrapper">
<div>

*/

?>