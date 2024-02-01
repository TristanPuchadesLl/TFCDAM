<?php
include_once "archivo.php";
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<div class="header-container">
    <nav class="nav-bar-container">
        <div>
            <a href="#">Inicio</a>
            <a href="#">Conócenos</a>
            <a href="#">Nosotros</a>
            <a href="#">Catálogo</a>
        </div>
        <div class="login-container">
            <a href="#">Iniciar Sesión</a>
            <a href="login.php">Registro</a>
        </div>
    </nav>

    <div class="header-content">
        <img  src="img/pixil-frame-0.png" alt="Logo de la página" class="logo">
        <p class="slogan">Cambiando vidas, latido a latido.</p>
        <div class="buttons-container">
            <a href="#" class="button">Botón 1</a>
            <a href="#" class="button">Botón 2</a>
        </div>
    </div>
</div>
<div class="main-container">
    <div class="boxes-container">
        <div class="box">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, magnam aperiam numquam ex dolorem corporis reprehenderit, alias quo non deserunt quod fugiat est molestias exercitationem velit rerum voluptatem dolore? Perferendis.</div>
        <div class="box">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, eos magni. Eum, ipsum nostrum atque soluta, recusandae nam dignissimos, ab aliquam dolore sapiente praesentium neque aspernatur quisquam laboriosam consectetur. Sequi.</div>
        <div class="box">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia, explicabo loremquae voluptatibus, officiis ullam possimus neque voluptatem a amet porro dignissimos tempora deserunt facilis vitae rerum quibusdam recusandae. Esse!xº</div>
    </div>

    <!-- Nuevo div para el catálogo y mapa -->
<div class="additional-content">
    <div class="catalog-box">
        <!-- Contenido de la caja del catálogo -->
        <h2>Catálogo</h2>
        <!-- Agrega aquí tus elementos del catálogo -->
    </div>
    <div class="map-box">
        <!-- Contenido de la caja del mapa -->
        <h2>Mapa</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24616.140387630097!2d-0.4734005813444254!3d39.53665813202291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd605bc401aec5b3%3A0x8968665575dd9e1a!2sCampus%20C%C3%A1mara%20FP!5e0!3m2!1ses!2ses!4v1706703781430!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
</div>
</body>
</html>
