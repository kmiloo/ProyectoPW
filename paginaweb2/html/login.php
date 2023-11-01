<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../JS/login.js"></script>
    <title>Mi Cuenta</title>
</head>
<body>
    <main>
        <div class="icono">
            <img src="../img/LOGO.png" alt="TR" class="logo">
        </div>

        <div class="container">
            
            <h2>Iniciar Sesión</h2>
            <form class="login-form" method="post">


                <div id="corre">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="text" id="correo" name="correo" placeholder="tucorreo@ejemplo.com">
                </div>
    
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">

                <?php 
                    include('../php/login_user.php');
                ?>
    
                <button type="submit" name="login">Login</button>
            </form>
            <p class="par">¿No tienes una cuenta? <a href="../html/registro.php">Registrate aquí</a></p>
            
        </div>
    </main>
</body>
</html>
