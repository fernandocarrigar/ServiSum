<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Título Aquí</title>
    <!-- Agrega las referencias a Bootstrap 5 CSS y JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container-mision-vision-valores {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px;
            background-color: #f4f4f4;
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
        }

        .mvv-item h2 {
            color: #007BFF;
            position: relative;
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
        }

        .mvv-item:hover .mvv-paragraph {
            max-height: 1000px;
            opacity: 1;
            transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
        }

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
    </style>
</head>

<body>
    <!-- Sección de Misión, Visión y Valores -->
    <section class="container-mision-vision-valores">
        <div class="mvv-item">
            <h2>Misión</h2>
            <p class="mvv-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aliquam sed est veritatis? Sint sed, quod dolores inventore impedit voluptatibus reprehenderit corporis voluptate beatae tenetur a dolore distinctio maiores quos.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dolores nobis rerum dolorum, iste minus voluptatem pariatur unde incidunt, modi reprehenderit? Mollitia, quam enim cum fuga corrupti dicta numquam expedita.
            </p>
        </div>
        <div class="mvv-item">
            <h2>Visión</h2>
            <p class="mvv-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut molestiae exercitationem in cupiditate, earum eos accusantium eius tempora neque culpa esse incidunt, ullam placeat maiores sequi perspiciatis quod quidem optio.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius perspiciatis, unde distinctio cum perferendis vitae minus saepe vel nesciunt! Cupiditate adipisci neque ratione alias accusamus laborum veniam ab itaque ducimus.
            </p>
        </div>
        <div class="mvv-item">
            <h2>Valores</h2>
            <p class="mvv-paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque deserunt ipsa vero doloremque dicta, animi corporis quod alias eius laudantium temporibus. Fugiat, perspiciatis libero. Ipsam, repellat. Animi quis ipsa possimus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sapiente odio optio impedit sint sequi vel explicabo eos id in est ipsum, qui quo, provident fugit et accusamus quas cumque!
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
    <section class="container-servicios container-galeria">
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

</body>

</html>