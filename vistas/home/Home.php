<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Título Aquí</title>
    <!-- Agrega las referencias a Bootstrap 5 CSS y JS -->

    <!-- Agrega Font Awesome para íconos animados -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Estilos globales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Estilos para la sección de Misión, Visión y Valores */
        .container-mision-vision-valores {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px;
            background-color: #333333;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 50px;
        }

        .mvv-item {
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            text-align: center;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease-in-out;
        }

        .mvv-item:hover {
            transform: translateY(-10px);
        }

        .mvv-item h2 {
            color: #007BFF;
            position: relative;
            margin-top: -10px;
            margin-bottom: 2px;
            /* Ajusta el margen inferior para reducir aún más el espacio */
            transition: transform 0.3s ease-in-out;
        }

        .mvv-item i {
            font-size: 48px;
            color: #007BFF;
            margin-bottom: 20px;
            display: block;
            position: relative;
            transition: transform 0.3s ease-in-out;
        }

        .mvv-item:hover h2 {
            transform: translateY(-45px);
        }

        .mvv-item:hover i {
            transform: translateX(-25%);
        }

        .mvv-item h2::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #007BFF;
            bottom: 0;
            left: 0;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease-in-out;
        }

        .mvv-item:hover h2::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        .mvv-paragraph {
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
            text-align: justify;
            margin-top: -5px;
            padding-bottom: 10px;
            margin-bottom: 0;
        }

        .mvv-item:hover .mvv-paragraph {
            max-height: 1000px;
            opacity: 1;
            transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
        }

        /* Estilos para la sección de Servicios */
        .container-servicios {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .container-servicios h1 {
            text-align: center;
            background: linear-gradient(45deg, #ff6600, #007BFF);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            padding-bottom: 10px;
            border-bottom: 2px solid #541414;
            width: 100%;
        }

        .container-servicios ul {
            list-style-type: disc;
            padding-left: 20px;
            margin-top: 40px;
        }

        .container-servicios li {
            margin-bottom: 10px;
        }

        .servicios-link {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }

        /* Estilos responsivos para la sección de Misión, Visión y Valores en tamaños pequeños */
        @media (max-width: 768px) {
            .container-mision-vision-valores {
                grid-template-columns: 1fr;
                /* Cambia a una columna en tamaños más pequeños */
                gap: 10px;
                text-align: center;
                /* Centra los elementos en tamaños pequeños */
            }

            .mvv-item {
                text-align: center;
                /* Alinea el contenido a la izquierda en tamaños más pequeños */
                padding: 20px;
            }

            .mvv-item:hover {
                transform: translateY(0);
                /* Elimina el efecto hover en tamaños pequeños */
            }

            .mvv-item i {
                transform: none;
                /* Restaura la transformación */
            }

            .mvv-item h2 {
                margin-top: 10px;
                /* Ajusta el margen superior */
                transform: none;
                /* Restaura la transformación */
                position: relative;
            }

            .mvv-item h2::after {
                content: "";
                position: absolute;
                width: 100%;
                height: 2px;
                background-color: #007BFF;
                bottom: -10px;
                /* Controla la posición de la línea debajo del heading */
                left: 0;
                transform: scaleX(0);
                transform-origin: right;
                transition: transform 0.3s ease-in-out;
            }

            .mvv-item:hover h2::after {
                transform: scaleX(1);
                transform-origin: left;
            }

            .mvv-paragraph {
                max-height: 0;
                /* Oculta el párrafo en tamaños pequeños por defecto */
                overflow: hidden;
                opacity: 0;
                transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
                text-align: justify;
                margin-top: -5px;
                padding-bottom: 10px;
                margin-bottom: 0;
            }

            .mvv-item:hover .mvv-paragraph {
                max-height: 1000px;
                /* Muestra el párrafo al hacer hover en tamaños pequeños */
                opacity: 1;
                transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
            }
        }
    </style>
</head>

<body>
    <!-- Sección de Misión, Visión y Valores -->
    <section class="container-mision-vision-valores">
        <div class="mvv-item">
            <i class="fas fa-bullseye"></i>
            <h2>Misión</h2>
            <p class="mvv-paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, rerum magni consequatur
                voluptatem eveniet harum enim eos praesentium fugiat reprehenderit facere facilis ad debitis obcaecati
                commodi inventore distinctio consequuntur minima?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem assumenda doloribus eligendi obcaecati,
                quas sunt at suscipit cum id veritatis ad itaque ipsum tempora dolor repudiandae nisi doloremque
                consectetur vel.
            </p>
        </div>
        <div class="mvv-item">
            <i class="fas fa-eye"></i>
            <h2>Visión</h2>
            <p class="mvv-paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, rerum magni consequatur
                voluptatem eveniet harum enim eos praesentium fugiat reprehenderit facere facilis ad debitis obcaecati
                commodi inventore distinctio consequuntur minima?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem assumenda doloribus eligendi obcaecati,
                quas sunt at suscipit cum id veritatis ad itaque ipsum tempora dolor repudiandae nisi doloremque
                consectetur vel.
            </p>
        </div>
        <div class="mvv-item">
            <i class="fas fa-heart"></i>
            <h2>Valores</h2>
            <p class="mvv-paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, rerum magni consequatur
                voluptatem eveniet harum enim eos praesentium fugiat reprehenderit facere facilis ad debitis obcaecati
                commodi inventore distinctio consequuntur minima?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem assumenda doloribus eligendi obcaecati,
                quas sunt at suscipit cum id veritatis ad itaque ipsum tempora dolor repudiandae nisi doloremque
                consectetur vel.
            </p>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section class="container-servicios">
        <h1 class="">Servicios que Realizamos</h1>
        <ul>
            <li><a class="servicios-link" href="#">Limpieza Integral</a></li>
            <li><a class="servicios-link" href="#">Limpieza Sanitizante COVID-19</a></li>
            <li><a class="servicios-link" href="#">Limpieza de Consorcios</a></li>
            <li><a class="servicios-link" href="#">Facility Services, Mantenimiento de Edificios, Reparaciones, Pintura, etc.</a></li>
            <li><a class="servicios-link" href="#">Movimiento de Documentación Interna y Externa</a></li>
            <li><a class="servicios-link" href="#">Mantenimiento de Espacios Verdes, Corte de Pasto</a></li>
            <li><a class="servicios-link" href="#">Finales de Obras (Solo con la contratación del servicio de Limpieza y Mantenimiento)</a></li>
            <li><a class="servicios-link" href="#">Lavado de Vidrios en Altura. Tarea realizada con personal propio</a></li>
            <li><a class="servicios-link" href="#">Lavado de Alfombras</a></li>
            <li><a class="servicios-link" href="#">Limpieza de Tanques de Agua Potable</a></li>
            <li><a class="servicios-link" href="#">Limpieza Mecánica de Pisos y Terminado en Cera</a></li>
            <li><a class="servicios-link" href="#">Provisión de Insumos de Tocador</a></li>
            <li><a class="servicios-link" href="#">Provisión de Aromatizadores y Desodorizadores</a></li>
        </ul>
    </section>

    <!-- Sección de Quiénes nos eligen -->
    <section class="container-servicios">
        <h1 class="container-servicios h1">Nuestros Clientes</h1>
        <div class="row row-cols-1 row-cols-md-4 mt-1 g-4">
            <div class="col mb-4 pb-0">
                <div class="card">
                    <a href="#">
                        <img src="marcas-logo-irwin.jpg" alt="Imagen 1" class="card-img-top" />
                    </a>
                </div>
            </div>
            <div class="col mb-4 pb-0">
                <div class="card">
                    <a href="#">
                        <img src="eeee.png" alt="Imagen 2" class="card-img-top" />
                    </a>
                </div>
            </div>
            <div class="col mb-4 pb-0">
                <div class="card">
                    <a href="#">
                        <img src="descarga.png" alt="Imagen 3" class="card-img-top" />
                    </a>
                </div>
            </div>
            <div class="col mb-4 pb-0">
                <div class="card">
                    <a href="#">
                        <img src="Craftsman-logo.jpg" alt="Imagen 4" class="card-img-top" />
                    </a>
                </div>
            </div>
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