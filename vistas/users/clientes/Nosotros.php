<?php
require_once("modelos/model_publicaciones.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Nuestra Empresa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .nosotros-header {
            background-color: #212529;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .nosotros-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        .nosotros-title {
            font-size: 32px;
            color: #fff;
            font-weight: bold;
        }

        .nosotros-subtitle {
            font-weight: bold;
        }

        .nosotros-text {
            font-size: 16px;
            line-height: 1.6;
            margin: 0 0 20px;
            text-align: justify;
        }

        /* Estilos para secciones de Misión, Visión y Valores */
        .nosotros-mission-vision-values {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 20px -10px;
        }

        .nosotros-section {
            flex: 0 0 calc(33.33% - 20px);
            margin: 0 10px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
        }

        .nosotros-section h3 {
            font-weight: bold;
        }

        .nosotros-section p {
            text-align: justify;
        }

        /* Estilo adicional para ampliar la sección "¿Quiénes Somos?" */
        #quienes-somos {
            flex: 0 0 calc(100% - 20px);
            margin: 0 10px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
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
                    <h3>Misión</h3>
                    <p>
                    <?php
                        foreach ($dtpub as $row):
                            if ($row["Seccion"] == "Mision") {
                                echo $row["Secundario"];
                            }
                        endforeach;
                    ?>
                    </p>
                </div>
                <div class="nosotros-section">
                    <h3>Visión</h3>
                    <p>
                    <?php
                        foreach ($dtpub as $row):
                            if ($row["Seccion"] == "Vision") {
                                echo $row["Secundario"];
                            }
                        endforeach;
                    ?>
                    </p>
                </div>
                <div class="nosotros-section">
                    <h3>Valores</h3>
                    <p>
                    <?php
                        foreach ($dtpub as $row):
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