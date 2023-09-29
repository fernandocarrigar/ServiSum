<?php
require_once("modelos/model_publicaciones.php");
require_once("modelos/model_servicios.php");
require_once("modelos/model_clientes.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Título Aquí</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <!-- Sección de Misión, Visión y Valores -->
    <section class="container-mision-vision-valores">
        <div class="mvv-item">
            <i class="fas fa-bullseye"></i>
            <h2>Misión</h2>
            <p class="mvv-paragraph">
                <?php
                foreach ($dtpub as $row):
                    if ($row["Seccion"] == "Mision") {
                        echo $row["Secundario"];
                    }
                endforeach;
                ?>
            </p>
        </div>
        <div class="mvv-item">
            <i class="fas fa-eye"></i>
            <h2>Visión</h2>
            <p class="mvv-paragraph">
                <?php
                foreach ($dtpub as $row):
                    if ($row["Seccion"] == "Vision") {
                        echo $row["Secundario"];
                    }
                endforeach;
                ?>
            </p>
        </div>
        <div class="mvv-item">
            <i class="fas fa-heart"></i>
            <h2>Valores</h2>
            <p class="mvv-paragraph">
                <?php
                foreach ($dtpub as $row):
                    if ($row["Seccion"] == "Valores") {
                        echo $row["Secundario"];
                    }
                endforeach;
                ?>
            </p>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section class="container-servicios">
        <h1 class="">Servicios que Realizamos</h1>
        <ul>
            <?php
            foreach ($dtservicio as $serv):
                ?>
                <li><a class="servicios-link" href="index.php?page=Servicios#<?php echo $serv["IdServicio"] ?>">
                        <?php echo $serv["Servicio"] ?>
                    </a></li>
                <?php
            endforeach;
            ?>
        </ul>
    </section>

    <!-- Sección de Quiénes nos eligen -->
    <section class="container-servicios">
        <h1 class="container-servicios h1">Nuestros Clientes</h1>
        <div class="row row-cols-1 row-cols-md-4 mt-1 g-4">
            <?php
            foreach ($dtclientes as $rows):
                ?>
                <div class="col mb-4 pb-0">
                    <div class="card">
                        <a href="<?php if (!empty($rows['UrlCliente']) && (isset($rows['UrlCliente']))) {
                            echo $rows['UrlCliente'];
                        } else {
                            echo "#";
                        } ?>"
                            target="_blank">
                            <img src="data:<?php echo $rows['MimeType'] ?>;base64,<?php echo (base64_encode($rows['Archivo'])) ?>"
                                alt="" class="card-img-top p-3" />
                            <h5 class="nav-link card-title">
                                <?php echo $rows['Descripcion'] ?>
                            </h5>
                        </a>
                    </div>
                </div>
                <?php
            endforeach;
            ?>
            <!-- Agrega más elementos aquí -->
        </div>
    </section>

    <!-- Sección de Maquinaria-->
    <section class="container-servicios">
        <h1 class="container-servicios h1">Maquinaria</h1>
        <div class="row row-cols-1 row-cols-md-4 mt-1 g-4">
            <div class="col mb-4 pb-0">
                <div class="card">
                    <a href="#">
                        <img src="lMd2BnFmFN.jpg" alt="Imagen 1" class="card-img-top" />
                    </a>
                </div>
            </div>
            <div class="col mb-4 pb-0">
                <div class="card">
                    <a href="#">
                        <img src="descarga.png" alt="Imagen 2" class="card-img-top" />
                    </a>
                </div>
            </div>
            <div class="col mb-4 pb-0">
                <div class="card">
                    <a href="#">
                        <img src="descarga2.png" alt="Imagen 3" class="card-img-top" />
                    </a>
                </div>
            </div>
            <div class="col mb-4 pb-0">
                <div class="card">
                    <a href="#">
                        <img src="descarga (1).png" alt="Imagen 4" class="card-img-top" />
                    </a>
                </div>
            </div>
            <!-- Agrega más elementos aquí -->
        </div>
    </section>

</body>

</html>