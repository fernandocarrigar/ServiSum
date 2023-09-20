<?php

require_once('recursos/config/db.php');
require_once('controladores/controller_herramientas.php');
require_once('controladores/controller_archivos.php');


$producto = new Productos ();
$producto->setTable("productos");
$producto->setView('view_productos');

$producto->setKey('IdProductos');

$producto->setColumns('Descripcion');
$producto->setColumns('Archivo');
$producto->setColumns('MimeType');
$producto->setColumns('IdMarca');
$producto->setColumns('IdHerramienta');

// $fch_r = date('Y-m-d');     //OBTIENE LA FECHA ACTUAL

if ((!empty($_GET['Id'])) && (isset($_GET['Id'])))  {
    $Id = $_GET['Id'];
    $dtprodwhere = $producto->getWhere($Id);
}else{
    $Id = null;
    $dtprodwhere = null;
}

$dtprod = $producto->getView();

if ((!empty($_POST['Marca'])) && (isset($_POST['Marca'])))  {
    $Marca = $_POST['Marca'];
    $dtmarcawhere = $producto->getWhereMarca($Marca);
}else{
    $dtmarcawhere = null;
}



if (((!empty($_GET['Marca'])) && (isset($_GET['Marca']))) && ((!empty($_GET['TpH'])) && (isset($_GET['TpH'])))) {

}elseif(((!empty($_GET['Marca'])) && (isset($_GET['Marca']))) && ((empty($_GET['TpH'])) && (!isset($_GET['TpH'])))) {
    $Marca = $_GET['Marca'];
    $dtmarcawhere = $producto->getWhereMarca($Marca);
}elseif(((empty($_GET['Marca'])) && (!isset($_GET['Marca']))) && ((!empty($_GET['TpH'])) && (isset($_GET['TpH'])))) {
    $Marca = $_GET['TpH'];
    $dtmarcawhere = $producto->getWhereHerramienta($Marca);
} else {
    $dtmarcawhere = null;
}

// DEFINE LA ACCION A REALIZAR: INSERT, UPDATE Y DELETE
if((!empty($_GET['actionprod'])) && (isset($_GET['actionprod']))) {
    $action = $_GET['actionprod'];
    if($action === 'insert') {
        // COMPROBAMOS QUE TODOS LOS ARCHIVOS HAYAN SIDO CORRECTOS
        //VERIFICA QUE $_FILES NO ESTE VACIO Y QUE SI CONTENGA ALGUN OBJETO
        if (!empty($_FILES['Archivo'])) {

            $archivoname = $_FILES['Archivo']['name'];
            $archivotype = $_FILES['Archivo']['type'];
            $archivosize = $_FILES['Archivo']['size'];
            $archivofile = $_FILES['Archivo']['tmp_name'];

            $upload = new ArchivosModel();
            $arch = $upload->uploadFile($archivoname, $archivotype, $archivosize, $archivofile);

            // COMPROBAMOS QUE TODOS LOS ARCHIVOS HAYAN SIDO CORRECTOS
            if ($arch == 0) {
                header('Location: index.php?page=Catalogos&form=' . $form . '');
            } else {

                //  MOVEMOS EL ARCHIVO A UNA RUTA DEL SERVIDOR LOCAL DE MANERA TEMPORAL

                $dir_file = $dir_doc . basename($archivoname);   //  ATRAPA EL ARCHIVO
                $typefile = strtolower(pathinfo($dir_file, PATHINFO_EXTENSION)); //  OBTIENE LA INFORMACION DEL ARCHIVO COMO: RUTA, NOMBRE Y EXTENSION

                $rtfile = $dir_doc . "Archivo_" . $archivoname . $typefile;
                move_uploaded_file($archivofile, $rtfile);

                $gestor = fopen($rtfile, "r");
                $filesize = filesize($rtfile);
                $content = fread($gestor, $filesize);
                $dtfile = addslashes($content);
                fclose($gestor);

                $filetype = mime_content_type($rtfile);

                // INSERTAMOS LA MARCA EN LA BASE DE DATOS 

                $descrip = "". $_POST['Descripcion'] ."";
                $idmar = "". $_POST['IdMarca'] ."";
                $idherr = "". $_POST['IdHerramienta'] ."";

                $producto->insertProducto($descrip, $dtfile, $filetype, $idmar,$idherr);

                // BORRA LOS ARCHIVOS QUE SE GUARDARON TEMPORALMENTE EN EL SERVIDOR
                unlink($rtfile);

                echo '<script>location.replace("index.php?page=Productos&ins=Ok");</script>';
            }
        } else {
            header('Location: index.php?pageEdicion&Id=' . $Id . '');
        }
    }else if($action === 'update'){
        
        //VERIFICA QUE $_FILES NO ESTE VACIO Y QUE SI CONTENGA ALGUN OBJETO
        if (!empty($_FILES['Archivo'])) {

            $archivoname = $_FILES['Archivo']['name'];
            $archivotype = $_FILES['Archivo']['type'];
            $archivosize = $_FILES['Archivo']['size'];
            $archivofile = $_FILES['Archivo']['tmp_name'];

            $upload = new ArchivosModel();
            $arch = $upload->uploadFile($archivoname, $archivotype, $archivosize, $archivofile);

            // COMPROBAMOS QUE TODOS LOS ARCHIVOS HAYAN SIDO CORRECTOS
            if ($arch == 0) {
                header('Location: index.php?page=Catalogos&form=' . $form . '');
            } else {

                //  MOVEMOS EL ARCHIVO A UNA RUTA DEL SERVIDOR LOCAL DE MANERA TEMPORAL

                $dir_file = $dir_doc . basename($archivoname);   //  ATRAPA EL ARCHIVO
                $typefile = strtolower(pathinfo($dir_file, PATHINFO_EXTENSION)); //  OBTIENE LA INFORMACION DEL ARCHIVO COMO: RUTA, NOMBRE Y EXTENSION

                $rtfile = $dir_doc . "Archivo_" . $archivoname . $typefile;
                move_uploaded_file($archivofile, $rtfile);

                $gestor = fopen($rtfile, "r");
                $filesize = filesize($rtfile);
                $content = fread($gestor, $filesize);
                $dtfile = addslashes($content);
                fclose($gestor);

                $filetype = mime_content_type($rtfile);

                // INSERTAMOS LA MARCA EN LA BASE DE DATOS 

                $descrip = "". $_POST['Descripcion'] ."";
                $idmar = "". $_POST['IdMarca'] ."";
                $idherr = "". $_POST['IdHerramienta'] ."";

                $producto->updateProducto($Id,$descrip, $dtfile, $filetype,$idmar, $idherr);

                // BORRA LOS ARCHIVOS QUE SE GUARDARON TEMPORALMENTE EN EL SERVIDOR
                unlink($rtfile);

                echo '<script>location.replace("index.php?page=Productos&upd=Ok");</script>';
            }
        } else {
            header('Location: index.php?pageEdicion&Id=' . $Id . '');
        }

    }else if($action === 'delete')   {
        $producto->deleteProducto($Id);
        echo '<script>location.replace("index.php?page=Productos&del=Ok");</script>';
    } 
}
