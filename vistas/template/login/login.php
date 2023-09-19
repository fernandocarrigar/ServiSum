
<style>

.login-container {
    max-width: 400px;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.logo-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 150px;
    height: 150px;
    margin-bottom: 20px;
}

.login-logo {
    text-align: center;
    margin-bottom: 30px;
}

.logo {
    max-width: 100%;
    max-height: 100%;
}

.login-card {
    background-color: #2c3e50;
    border-radius: 12px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    padding: 40px 50px;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

h2 {
    margin-top: 0;
    margin-bottom: 25px;
    text-align: center;
    color: #34495e;
}

.input-group {
    position: relative;
    margin-bottom: 20px;
    width: 100%;
}

.icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #34495e;
}

input[type="text"],
input[type="password"] {
    width: calc(100% - 60px);
    padding: 12px 15px 12px 45px;
    border: 1px solid #bdc3c7;
    border-radius: 8px;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s;
    color: #000;
}

input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #e74c3c;
}

button {
    width: 100%;
    padding: 14px;
    background-color: #e74c3c;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    font-size: 17px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
}

button:hover {
    background-color: #c0392b;
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .login-card {
        padding: 20px 30px;
    }

    h2 {
        font-size: 20px;
        margin-bottom: 15px;
    }

    input[type="text"],
    input[type="password"] {
        font-size: 14px;
    }

    button {
        font-size: 15px;
    }
}

@media (max-width: 480px) {
    .login-card {
        padding: 20px;
    }
}
</style>

<?php
    include_once("modelos/model_login.php");  
?>

<title>Iniciar Sesión</title>

    <div class="justify-content-center d-flex">
        <div class="login-container">
            <div class="login-card">
                <div class="logo-container">
                    <img src="Img/MGC_Logo_EngraneB.png" alt="Logo" class="logo">
                </div>
                <form action="loginProcess.php" method="post">
                    <div class="input-group">
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <input type="text" name="username" placeholder="Usuario">
                    </div>
                    <div class="input-group">
                        <span class="icon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Contraseña">
                    </div>
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>