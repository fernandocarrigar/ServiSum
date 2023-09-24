<?php
require_once("modelos/model_archivos.php");
require_once("modelos/model_publicaciones.php");

if (isset($_GET['ins'])) {
    if ($_GET['ins'] == "Ok") {
        echo '<script>alert("Se inserto correctamente");</script>';
    }
} elseif (isset($_GET['upd'])) {
    if ($_GET['upd'] == "Ok") {
        echo '<script>alert("Se actualizo correctamente");</script>';
    }
} elseif (isset($_GET['del'])) {
    if ($_GET['del'] == "Ok") {
        echo '<script>alert("Se elimino correctamente");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Servicios</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px 0;
            color: #333;
        }

        .gallery {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .category {
            width: 80%;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        .category h2 {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin: 0;
        }

        .images {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 20px;
        }

        .images img {
            width: 0;
            flex-grow: 1;
            object-fit: cover;
            opacity: 0.8;
            transition: width 0.2s ease, opacity 0.2s ease, filter 0.2s ease;
            margin-right: 10px;
        }

        .images img:last-child {
            margin-right: 0;
        }

        .images img:hover {
            cursor: crosshair;
            width: 300px;
            opacity: 1;
            filter: contrast(120%);
        }

        /* Estilos para dispositivos móviles */
        @media (max-width: 768px) {
            .category {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <section class="gallery">
        <div class="category">
            <h2>Lavado</h2>
            <div class="images">
                <img src="descarga2.png" alt="Plomería 1">
                <img src="descarga2.png" alt="Plomería 2">
                <img src="descarga2.png" alt="Plomería 3">
                <img src="descarga2.png" alt="Plomería 4">
                <img src="descarga2.png" alt="Plomería 5">
                <img src="descarga2.png" alt="Plomería 6">
                <img src="descarga2.png" alt="Plomería 1">
                <img src="descarga2.png" alt="Plomería 2">
                <img src="descarga2.png" alt="Plomería 3">
                <img src="descarga2.png" alt="Plomería 4">
                <img src="descarga2.png" alt="Plomería 5">
                <img src="descarga2.png" alt="Plomería 6">
                <img src="descarga2.png" alt="Plomería 1">
                <img src="descarga2.png" alt="Plomería 2">
                <img src="descarga2.png" alt="Plomería 3">
                <img src="descarga2.png" alt="Plomería 4">
                <img src="descarga2.png" alt="Plomería 5">
                <img src="descarga2.png" alt="Plomería 6">
                <img src="descarga2.png" alt="Plomería 1">
                <img src="descarga2.png" alt="Plomería 2">
                <img src="descarga2.png" alt="Plomería 3">
                <img src="descarga2.png" alt="Plomería 4">
                <img src="descarga2.png" alt="Plomería 5">
                <img src="descarga2.png" alt="Plomería 6">
            </div>
        </div>
    </section>
</body>

</html>