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
            font-family: 'Open Sans', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            background: linear-gradient(45deg, #f36a7b, #3f4ed7);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            padding: 30px 0;
            font-weight: 600;
        }

        .gallery {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 2%;
        }

        .category {
            width: 80%;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
            transition: box-shadow 0.3s ease;
        }

        .category:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .category h2 {
            background-color: #3f4ed7;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin: 0;
            font-weight: 600;
        }

        .carousel-container {
            overflow: hidden;
            position: relative;
        }

        .image-carousel {
            display: flex;
            transition: transform 0.5s ease;
            padding: 20px;
        }

        .image {
            flex: 0 0 calc(20% - 20px);
            position: relative;
            margin-right: 20px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .image:last-child {
            margin-right: 0;
        }

        .image img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .image:hover img {
            transform: scale(1.1);
            filter: contrast(120%);
        }

        .description {
            position: absolute;
            background-color: rgba(63, 78, 215, 0.8);
            color: #fff;
            padding: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-weight: 600;
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
            width: 40px;
            height: 40px;
            background-color: rgba(63, 78, 215, 0.7);
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
            left: 0px;
            bottom: 0px;
            transform: none;
        }

        .navigation-arrows.right {
            right: 0px;
            bottom: 0px;
            transform: none;
        }

        .navigation-arrows:hover {
            background-color: rgba(63, 78, 215, 0.9);
        }

        /* Para tabletas y dispositivos más pequeños */
        @media (max-width: 1024px) {
            .image {
                flex: 0 0 calc(25% - 15px);
                margin-right: 15px;
            }
        }

        /* Para teléfonos móviles en modo horizontal y dispositivos más pequeños */
        @media (max-width: 768px) {
            .image {
                flex: 0 0 calc(33.333% - 10px);
                margin-right: 10px;
            }

            .category h2,
            .navigation-arrows {
                padding: 15px;
            }

            .navigation-arrows {
                width: 30px;
                height: 30px;
                font-size: 18px;
            }
        }

        /* Para teléfonos móviles en modo vertical y dispositivos más pequeños */
        @media (max-width: 480px) {
            .image {
                flex: 0 0 calc(50% - 10px);
                margin-right: 10px;
            }

            .category h2 {
                font-size: 18px;
            }

            h1 {
                font-size: 24px;
                padding: 20px 0;
            }

            .description {
                font-size: 14px;
            }
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