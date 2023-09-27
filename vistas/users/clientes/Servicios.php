<?php

require_once("modelos/model_servicios.php");
require_once("modelos/model_evidencias.php");

?>

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
            margin: 0 0 40px 0;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
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
            flex: 0 0 calc(20% - 20px);
            position: relative;
            margin-right: 20px;
            overflow: hidden;
            cursor: pointer;
        }

        .image:last-child {
            margin-right: 0;
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
        <?php
        foreach ($dtservicio as $serv) :
        ?>
            <div class="category">
                <h2>
                    <?php echo $serv["Servicio"] ?>
                </h2>
                <!-- Contenedor del carrusel -->
                <div class="carousel-container">
                    <!-- Flechas de navegación -->
                    <div class="navigation-arrows left" id="prevButton">&#9664;</div>
                    <div class="image-carousel">
                        <?php
                        foreach ($dtevidencias as $row) :
                            if ($row["Servicio"] == $serv["Servicio"]) {
                        ?>
                                <!-- Imagen 1 con descripción -->
                                <div class="image">
                                    <img src="data:<?php echo $row['EvidenciaTipoImg'] ?>;base64,<?php echo (base64_encode($row['EvidenciaImg'])) ?>" alt="<?php echo $row["Descripcion"] ?>" />
                                    <div class="description">
                                        <?php echo $row["Descripcion"] ?>
                                    </div>
                                </div>
                        <?php
                            }
                        endforeach;
                        ?>
                    </div>
                    <div class="navigation-arrows right" id="nextButton">&#9654;</div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </section>
</body>

</html>