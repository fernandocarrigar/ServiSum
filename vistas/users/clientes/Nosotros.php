<?php
require_once("modelos/model_publicaciones.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSP - Sobre Nosotros</title>
    <style>
        /* Define colors and fonts from previous styles */
        :root {
            --bg-color: #f9f9f9;
            --text-color: #333;
            --primary-color: #00345e;
            --secondary-color: #007BFF;
            --shadow-light: rgba(0, 0, 0, 0.1);
            --shadow-dark: rgba(0, 0, 0, 0.2);
            --font-primary: 'Open Sans', sans-serif;
        }

        body {
            font-family: var(--font-primary);
            background-color: var(--bg-color);
            margin: 0;
            padding: 0;
            color: var(--text-color);
        }

        .nosotros-header {
            background-color: var(--primary-color);
            color: #fff;
            padding: 40px 0;
            text-align: center;
            box-shadow: 0 4px 15px var(--shadow-light);
        }

        .mvv-heading {
            text-align: center;
        }

        .nosotros-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid var(--primary-color);
            border-radius: 12px;
        }

        .nosotros-title {
            font-size: 42px;
            /* Incrementado */
            color: #fff;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .nosotros-subtitle {
            font-size: 28px;
            /* Incrementado */
            font-weight: bold;
            margin-bottom: 20px;
            color: var(--primary-color);
            text-align: center;
        }

        .nosotros-text {
            font-size: 18px;
            line-height: 1.8;
            margin: 0 0 40px;
            text-align: justify;
        }

        /* Estilos para secciones de Misión, Visión y Valores */
        .nosotros-mission-vision-values {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .nosotros-section {
            flex: 1;
            padding: 30px;
            background-color: #f7f7f7;
            border-radius: 8px;
            border: 2px solid var(--primary-color);
            box-shadow: 0 4px 15px var(--shadow-light);
            transition: box-shadow 0.3s ease;
        }

        .nosotros-section:hover {
            box-shadow: 0 6px 18px var(--shadow-dark);
        }

        .nosotros-section h3 {
            font-weight: bold;
            font-size: 24px;
            /* Incrementado */
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .nosotros-section p {
            text-align: justify;
        }

        #quienes-somos {
            margin-bottom: 40px;
            border: 2px solid var(--primary-color);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Media Queries para responsividad */
        /* Tablets */
        @media (max-width: 992px) {
            .nosotros-mission-vision-values {
                flex-direction: column;
            }

            .nosotros-section {
                margin-bottom: 20px;
            }
        }

        /* Teléfonos en posición landscape y tablets pequeñas */
        @media (max-width: 768px) {
            .nosotros-container {
                padding: 20px;
            }
        }

        /* Teléfonos en posición portrait */
        @media (max-width: 576px) {
            .nosotros-title {
                font-size: 32px;
            }

            .nosotros-subtitle {
                font-size: 22px;
            }

            .nosotros-section h3 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <header class="nosotros-header">
        <h1 class="nosotros-title">Acerca De Nosotros.</h1>
    </header>
    <div class="nosotros-container">
        <section id="quienes-somos">
            <h2 class="nosotros-subtitle">¿Quiénes Somos?</h2>
            <p class="nosotros-text">Somos una empresa comprometida con la excelencia y la innovación. Desde nuestra fundación, hemos trabajado incansablemente para satisfacer las necesidades de nuestros clientes y proporcionar soluciones de alta calidad en el mercado.</p>
        </section>

        <section id="mision-vision-valores">
            <div class="nosotros-mission-vision-values">
                <div class="nosotros-section">
                    <h3 class="mvv-heading">Misión</h3>
                    <p>
                        <?php
                        foreach ($dtpub as $row) :
                            if ($row["Seccion"] == "Mision") {
                                echo $row["Secundario"];
                            }
                        endforeach;
                        ?>
                    </p>
                </div>
                <div class="nosotros-section">
                    <h3 class="mvv-heading">Visión</h3>
                    <p>
                        <?php
                        foreach ($dtpub as $row) :
                            if ($row["Seccion"] == "Vision") {
                                echo $row["Secundario"];
                            }
                        endforeach;
                        ?>
                    </p>
                </div>
                <div class="nosotros-section">
                    <h3 class="mvv-heading">Valores</h3>
                    <p>
                        <?php
                        foreach ($dtpub as $row) :
                            if ($row["Seccion"] == "Valores") {
                                echo $row["Secundario"];
                            }
                        endforeach;
                        ?>
                    </p>
                </div>
            </div>
        </section>
    </div>
</body>

</html>