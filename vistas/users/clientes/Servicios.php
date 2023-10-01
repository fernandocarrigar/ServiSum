<?php

require_once("modelos/model_servicios.php");
require_once("modelos/model_evidencias.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSP - Galería de Productos</title>
</head>

<body>
    <h1 class="servicios-heading">Nuestros Servicios</h1>
    <section class="gallery">
        <?php
        foreach ($dtservicio as $serv):
            ?>
            <section id="<?php echo $serv['IdServicio'] ?>"></section>

            <div class="category">
                <h2>
                    <?php echo $serv["Servicio"] ?>
                </h2>
                <!-- Contenedor del carrusel -->
                <div class="carousel-container">
                    <!-- Flechas de navegación -->
                    <div class="navigation-arrows left"
                        onclick="navigateCarousel('left', '<?php echo $serv['Servicio']; ?>')">&#8592;</div>
                    <div class="image-carousel" id="carousel-<?php echo $serv["Servicio"]; ?>">
                        <?php
                        foreach ($dtevidencias as $row):
                            if ($row["Servicio"] == $serv["Servicio"]) {
                                ?>
                                <!-- Imagen con descripción -->
                                <div class="image">
                                    <img src="data:<?php echo $row['EvidenciaTipoImg'] ?>;base64,<?php echo (base64_encode($row['EvidenciaImg'])) ?>"
                                        alt="<?php echo $row["Descripcion"] ?>" />
                                    <div class="description">
                                        <?php echo $row["Descripcion"] ?>
                                    </div>
                                </div>
                                <?php
                            }
                        endforeach;
                        ?>
                    </div>
                    <div class="navigation-arrows right"
                        onclick="navigateCarousel('right', '<?php echo $serv['Servicio']; ?>')">&#8594;</div>
                </div>
            </div>
            <?php
        endforeach;
        ?>
    </section>
</body>

</html>