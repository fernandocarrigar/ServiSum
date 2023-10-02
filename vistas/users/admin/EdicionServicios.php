<!-- Navbar lateral start-->

<?php
require_once("modelos/model_servicios.php");
?>

<title>SSP - Editar Servicios</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="container p-5 justify-content-center bg-dark-subtle">

    <!-- Titulo de la vista -->
    <h1 class="text-center mb-5">Agregue un servicio</h1>
    <!-- Titulo de la vista -->


    <?php
    if ((!empty($dtserviciowhere)) && (isset($dtserviciowhere))) {
    ?>
        <form method="post" action="index.php?page=ServiciosAdmin&actionserv=update&IdS=<?php echo $IdS ?>" enctype="multipart/form-data">
        <?php
    } elseif ((empty($dtserviciowhere)) && (!isset($dtserviciowhere))) {
        ?>
            <form method="post" action="index.php?page=ServiciosAdmin&actionserv=insert" enctype="multipart/form-data">
                <?php
            }

            if ((isset($dtserviciowhere))) {
                foreach ($dtserviciowhere as $rows) :
                ?>
                    <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                        <div class="form-floating m-3">
                            <input id="Servicio" name="Servicio" class="form-control" value="<?php echo $rows['Servicio'] ?>" type="text" placeholder="Titulo del servicio" />
                            <label for="Servicio">Titulo del servicio</label>
                        </div>
                        <div class="form-floating m-3">
                            <textarea id="Descripcion" name="Descripcion" class="form-control" value="<?php echo $rows['Descripcion'] ?>" type="text" placeholder="Descripcion" style="height:300px;"><?php echo $rows['Descripcion'] ?></textarea>
                            <label for="Descripcion">Descripción</label>
                        </div>
                    </div>
                    <div class="container ms-auto me-auto mt-4">
                        <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                    </div>
                <?php
                endforeach;
            } else if (!isset($dtserviciowhere)) {
                ?>
                <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                    <div class="form-floating m-3">
                        <input id="Servicio" name="Servicio" class="form-control" type="text" placeholder="Titulo del servicio" />
                        <label for="Servicio">Titulo del servicio</label>
                    </div>
                    <div class="form-floating m-3">
                        <textarea id="Descripcion" name="Descripcion" class="form-control" type="text" placeholder="Descripcion" style="height:300px;"></textarea>
                        <label for="Descripcion">Descripción</label>
                    </div>

                </div>
                <div class="container ms-auto me-auto mt-4">
                    <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                </div>
            <?php
            }
            ?>
            </form>
</div>