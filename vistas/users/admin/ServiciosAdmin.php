<?php
require_once("modelos/model_servicios.php");
?>

<title>SSP - Servicios</title>

<div class="container table-responsive justify-content-center p-0 table-scroll" style="max-height:500px;">
    <table class="table table-hover overflow-auto table-responsive-sm m-0 break-word">
        <tr class="table-dark sticky-top z-0 text-center">
            <th scope="row" colspan="2">Servicios</th>
            <th scope="row" colspan="3">Descripción</th>
            <th colspan="2">Acciones</th>
        </tr>
        <?php
        foreach ($dtservicio as $row) :
        ?>
            <tr>
                <td colspan="2" class=""><?php echo $row["Servicio"] ?></td>
                <td colspan="3" class=""><?php echo $row["Descripcion"] ?></td>
                <td colspan="1" class=""><a href="index.php?page=EdicionServicios&IdS=<?php echo $row["IdServicio"] ?>" class="btn btn-primary btn-sm">Editar</a></td>
                <td colspan="1" class=""><a href="index.php?page=ServiciosAdmin&actionserv=delete&IdS=<?php echo $row["IdServicio"] ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</div>