<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Título Aquí</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Estilo para la sección de Misión, Visión y Valores */
        .container-mision-vision-valores {
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
            /* Añadido para la posición relativa */
        }

        /* Línea decorativa debajo de los headings */
        .mvv-item h2::after {
            content: "";
            position: absolute;
            width: 100%;
            /* Ancho del 100% del card */
            height: 2px;
            /* Grosor de la línea */
            background-color: #007BFF;
            /* Color de la línea */
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

        /* Ocultar el párrafo por defecto y aplicar una transición suave */
        .mvv-paragraph {
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
            text-align: justify;
        }

        /* Mostrar el párrafo al hacer hover */
        .mvv-item:hover .mvv-paragraph {
            max-height: 1000px;
            opacity: 1;
            transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
        }

        /* Estilo para la sección de Servicios */
        .container-servicios {
            max-width: 800px;
            /* Ancho del contenedor ajustado */
            margin: 0 auto;
            padding: 20px;
        }

        .container-servicios h1 {
            text-align: center;
            background: linear-gradient(45deg, #ff6600, #007BFF);
            /* Gradiente con colores más brillantes */
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

        /* Clases personalizadas para los enlaces con el prefijo "servicios" */
        .servicios-link {
            text-decoration: none;
            color: #000;
            /* Color negro */
            font-weight: bold;
        }

        .servicios-link-visited {
            color: #000;
        }

        .servicios-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Sección de Misión, Visión y Valores -->
    <section class="container-mision-vision-valores">
        <div class="mvv-item">
            <h2>Misión</h2>
            <!-- Aquí se mostrará la Misión obtenida dinámicamente con PHP -->
            <p class="mvv-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aliquam sed est veritatis? Sint sed, quod dolores inventore impedit voluptatibus reprehenderit corporis voluptate beatae tenetur a dolore distinctio maiores quos.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dolores nobis rerum dolorum, iste minus voluptatem pariatur unde incidunt, modi reprehenderit? Mollitia, quam enim cum fuga corrupti dicta numquam expedita.
            </p>
        </div>
        <div class="mvv-item">
            <h2>Visión</h2>
            <!-- Aquí se mostrará la Visión obtenida dinámicamente con PHP -->
            <p class="mvv-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut molestiae exercitationem in cupiditate, earum eos accusantium eius tempora neque culpa esse incidunt, ullam placeat maiores sequi perspiciatis quod quidem optio.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius perspiciatis, unde distinctio cum perferendis vitae minus saepe vel nesciunt! Cupiditate adipisci neque ratione alias accusamus laborum veniam ab itaque ducimus.
            </p>
        </div>
        <div class="mvv-item">
            <h2>Valores</h2>
            <!-- Aquí se mostrarán los Valores obtenidos dinámicamente con PHP -->
            <p class="mvv-paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque deserunt ipsa vero doloremque dicta, animi corporis quod alias eius laudantium temporibus. Fugiat, perspiciatis libero. Ipsam, repellat. Animi quis ipsa possimus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sapiente odio optio impedit sint sequi vel explicabo eos id in est ipsum, qui quo, provident fugit et accusamus quas cumque!
            </p>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section class="container-servicios">
        <h1 class="">Servicios que Realizamos</h1>
        <ul>
            <li><a class="servicios-link servicios-link-visited" href="#">Limpieza Integral</a></li>
            <li><a class="servicios-link servicios-link-visited" href="#">Limpieza Sanitizante COVID-19</a></li>
            <li><a class="servicios-link servicios-link-visited" href="#">Limpieza de Consorcios</a></li>
            <li><a class="servicios-link servicios-link-visited" href="#">Facility Services, Mantenimiento de Edificios, Reparaciones, Pintura, etc.</a></li>
            <li><a class="servicios-link servicios-link-visited" href="#">Movimiento de Documentación Interna y Externa</a></li>
            <li><a class="servicios-link servicios-link-visited" href="#">Mantenimiento de Espacios Verdes, Corte de Pasto</a></li>
            <li><a class="servicios-link servicios-link-visited" href="#">Finales de Obras (Solo con la contratación del servicio de Limpieza y Mantenimiento)</a></li>
            <li><a class="servicios-link servicios-link-visited" href="#">Lavado de Vidrios en Altura. Tarea realizada con personal propio</a></li>
            <li><a class="servicios-link servicios-link-visited" href="#">Lavado de Alfombras</a></li>
            <li><a class="servicios-link servicios-link-visited" href="#">Limpieza de Tanques de Agua Potable</a></li>
            <li><a class="servicios-link servicios-link-visited" href="#">Limpieza Mecánica de Pisos y Terminado en Cera</a></li>
            <li><a class="servicios-link servicios-link-visited" href="#">Provisión de Insumos de Tocador</a></li>
            <li><a class="servicios-link servicios-link-visited" href="#">Provisión de Aromatizadores y Desodorizadores</a></li>
        </ul>
    </section>
</body>

</html>