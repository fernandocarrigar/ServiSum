<?php
require_once("modelos/model_publicaciones.php");
?>


<title>SSP - Sobre Nosotros</title>


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