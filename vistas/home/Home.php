<?php
require_once("modelos/model_publicaciones.php");
require_once("modelos/model_servicios.php");
require_once("modelos/model_clientes.php");
require_once("modelos/model_maquinas.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSP - Inicio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <section>
        <div class="container-fluid carousel-container" style="padding: 0; padding-bottom: 48px;">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ul class="carousel-indicators" style="list-style: none;">
                    <?php
                    $cuenta = 0;
                    foreach ($dtpub as $imgCar) :
                        if ($imgCar['Seccion'] == "ImagenesCarrusel") {
                            $cuenta++;
                        }
                    endforeach;
                    for ($i = 0; $i < $cuenta; $i++) {
                    ?>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"></li>
                    <?php
                    }
                    ?>
                </ul>
                <div class="carousel-inner custom-carousel-inner">
                    <?php
                    $j = 0;
                    foreach ($dtpubSeccion as $imgCar) :
                        if ($imgCar['Seccion'] == "ImagenesCarrusel") {
                    ?>
                            <div class="carousel-item <?php echo $j === 0 ? 'active' : ''; ?>">
                                <img src="data:<?php echo $imgCar['MimeType'] ?>;base64,<?php echo (base64_encode($imgCar['Archivo'])) ?>" class="d-block w-100 custom-carousel-img" style="object-fit:contain;" alt="Imagen 1">
                            </div>
                    <?php
                            $j++;
                        }
                    endforeach;
                    ?>
                </div>
            </div>
        </div>

    </section>

    <!-- Sección de Misión, Visión y Valores -->
    <section class="container-mision-vision-valores">
        <div class="mvv-item">
            <i class="fas fa-bullseye"></i>
            <h2>Misión</h2>
            <p class="mvv-paragraph">
                <?php
                foreach ($dtpub as $row) :
                    if ($row["Seccion"] == "Mision") {
                        echo $row["Secundario"];
                    }
                endforeach;
                ?>
            </p>
            <a href="index.php?page=Nosotros" class="btn btn-primary home-btn">Descubre Más</a>
        </div>
        <div class="mvv-item">
            <i class="fas fa-eye"></i>
            <h2>Visión</h2>
            <p class="mvv-paragraph">
                <?php
                foreach ($dtpub as $row) :
                    if ($row["Seccion"] == "Vision") {
                        echo $row["Secundario"];
                    }
                endforeach;
                ?>
            </p>
            <a href="index.php?page=Nosotros" class="btn btn-primary home-btn">Descubre Más</a>
        </div>
        <div class="mvv-item" id="valores">
            <i class="fas fa-heart"></i>
            <h2>Valores</h2>
            <p class="mvv-paragraph">
                <?php
                foreach ($dtpub as $row) :
                    if ($row["Seccion"] == "Valores") {
                        echo $row["Secundario"];
                    }
                endforeach;
                ?>
            </p>
            <a href="index.php?page=Nosotros" class="btn btn-primary home-btn">Descubre Más</a>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section class="container-servicios">
        <h1 class="servicios-title">Servicios Que Realizamos</h1>
        <ul class="servicios-list">
            <?php
            foreach ($dtservicio as $serv) :
            ?>
                <li>
                    <a class="servicios-link" href="index.php?page=Servicios#<?php echo $serv["IdServicio"] ?>">
                        <?php echo $serv["Servicio"] ?>
                    </a>
                </li>
            <?php
            endforeach;
            ?>
        </ul>
    </section>

    <!-- Sección de Nuestros Clientes -->
    <section class="container-servicios">
        <h1 class="servicios-title" id="clientes">Nuestros Clientes</h1>
        <div class="row">
            <?php
            foreach ($dtclientes as $rows) :
            ?>
                <div class="col-md-4 col-lg-3 col-sm-6 col-12 mb-4 pb-0">
                    <div class="home-card card">
                        <a href="<?php if (!empty($rows['UrlCliente']) && (isset($rows['UrlCliente']))) {
                                        echo $rows['UrlCliente'];
                                    } else {
                                        echo "#";
                                    } ?>" target="_blank">
                            <div class="image-container position-relative">
                                <img src="data:<?php echo $rows['MimeType'] ?>;base64,<?php echo (base64_encode($rows['Archivo'])) ?>" alt="" class="card-img-top p-3 clientes-imagen img-fluid" style="object-fit: contain; width: 290px; height: 330px;" />
                                <div class="image-overlay">
                                    <h5><?php echo $rows['Descripcion'] ?></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Sección de Maquinaria-->
    <section class="container-servicios">
        <h1 class="servicios-title">Maquinaria</h1>
        <div class="row">
            <?php
            foreach ($dtmaquinas as $rows) :
            ?>
                <div class="col-md-4 col-lg-3 col-sm-6 col-12 mb-4 pb-0">
                    <div class="home-card card">
                        <a href="#">
                            <div class="image-container position-relative">
                                <img src="data:<?php echo $rows['MimeType'] ?>;base64,<?php echo (base64_encode($rows['Archivo'])) ?>" alt="" class="card-img-top p-3 maquinaria-imagen img-fluid" style="object-fit: contain; width: 290px; height: 330px;" />
                                <div class="image-overlay maquinaria-description">
                                    <h5><?php echo $rows['Descripcion'] ?></h5>
                                </div>
                            </div>
                        </a>
                        <div class="card-body card-home overflow-auto">
                            <h5 class="card-title">
                                <?php echo $rows['Descripcion'] ?>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</body>

</html>