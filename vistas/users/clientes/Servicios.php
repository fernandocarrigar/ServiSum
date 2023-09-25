<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background: linear-gradient(45deg, #ff6600, #007BFF);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            padding-bottom: 10px;
        }

        .gallery {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .category {
            width: 80%;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        .category h2 {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin: 0;
        }

        .carousel-container {
            overflow: hidden;
            position: relative;
        }

        .image-carousel {
            display: flex;
            transition: transform 0.5s ease;
        }

        .image {
            flex: 0 0 calc(100% / 5);
            position: relative;
            margin-right: 10px;
            overflow: hidden;
            cursor: pointer;
        }

        .image img {
            width: 100%;
            height: auto;
            object-fit: cover;
            opacity: 0.8;
            transition: transform 0.2s ease, opacity 0.2s ease, filter 0.2s ease;
        }

        .image:hover img {
            transform: scale(1.1);
            opacity: 1;
            filter: contrast(120%);
        }

        .description {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 10px;
            opacity: 0;
            transition: opacity 0.2s ease;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .image:hover .description {
            opacity: 1;
        }

        @media (max-width: 768px) {
            .category {
                width: 100%;
            }
        }

        .navigation-arrows {
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            text-align: center;
            font-size: 24px;
            cursor: pointer;
            z-index: 2;
            border-radius: 50%;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navigation-arrows.left {
            left: 10px;
            top: auto;
            bottom: 10px;
        }

        .navigation-arrows.right {
            right: 10px;
            top: auto;
            bottom: 10px;
        }

        .navigation-arrows:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>

<body>
    <h1>Nuestros Servicios</h1>
    <section class="gallery">
        <div class="category">
            <h2>Lavado</h2>
            <!-- Contenedor del carrusel -->
            <div class="carousel-container">
                <!-- Flechas de navegación -->
                <div class="navigation-arrows left" id="prevButton">&#9664;</div>
                <div class="image-carousel">
                    <!-- Imagen 1 con descripción -->
                    <div class="image">
                        <img src="descarga2.png" alt="Producto 1">
                        <div class="description">Descripción del Producto 1.</div>
                    </div>
                    <!-- Repite este patrón para más imágenes -->
                    <div class="image">
                        <img src="descarga2.png" alt="Producto 2">
                        <div class="description">Descripción del Producto 2.</div>
                    </div>
                    <div class="image">
                        <img src="descarga2.png" alt="Producto 3">
                        <div class="description">Descripción del Producto 3.</div>
                    </div>
                    <div class="image">
                        <img src="descarga2.png" alt="Producto 4">
                        <div class="description">Descripción del Producto 4.</div>
                    </div>
                    <div class="image">
                        <img src="descarga2.png" alt="Producto 5">
                        <div class="description">Descripción del Producto 5.</div>
                    </div>
                    <!-- Repite este patrón para más imágenes -->
                    <div class="image">
                        <img src="descarga2.png" alt="Producto 6">
                        <div class="description">Descripción del Producto 6.</div>
                    </div>
                    <!-- Puedes agregar más imágenes aquí -->
                    <div class="image">
                        <img src="descarga2.png" alt="Producto 7">
                        <div class="description">Descripción del Producto 7.</div>
                    </div>
                    <div class="image">
                        <img src="descarga2.png" alt="Producto 8">
                        <div class="description">Descripción del Producto 8.</div>
                    </div>
                    <div class="image">
                        <img src="descarga2.png" alt="Producto 9">
                        <div class="description">Descripción del Producto 9.</div>
                    </div>
                    <div class="image">
                        <img src="descarga2.png" alt="Producto 10">
                        <div class="description">Descripción del Producto 10.</div>
                    </div>
                    <div class="image">
                        <img src="descarga2.png" alt="Producto 11">
                        <div class="description">Descripción del Producto 11.</div>
                    </div>
                    <div class="image">
                        <img src="descarga2.png" alt="Producto 11">
                        <div class="description">Descripción del Producto 11.</div>
                    </div>
                </div>
                <div class="navigation-arrows right" id="nextButton">&#9654;</div>
            </div>
        </div>
    </section>
</body>

</html>