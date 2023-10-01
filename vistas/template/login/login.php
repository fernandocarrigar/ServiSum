<?php
include_once("modelos/model_login.php");
?>

<title>SSP - Iniciar Sesión</title>

<div class="justify-content-center d-flex">
    <div class="login-container">
        <div class="login-logo-container">
            <img src="Logo Servicios SSP-02.png" alt="Logo" class="login-logo">
        </div>
        <form action="loginProcess.php" method="post">
            <div class="login-input-group">
                <span class="login-icon"><img src="recursos/iconos/usuario.svg"></span>
                <input type="text" name="username" placeholder="Usuario" class="login-input">
            </div>
            <div class="login-input-group">
                <span class="login-icon"><img src="recursos/iconos/pass.svg"></span>
                <input type="password" name="password" placeholder="Contraseña" class="login-input">
            </div>
            <button type="submit" class="login-button">Entrar</button>
        </form>
    </div>
</div>