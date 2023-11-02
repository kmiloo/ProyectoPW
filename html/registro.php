<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../JS/login.js"></script>
    <title>Registrarse</title>
</head>
<body>
    <main>
        <div class="icono1">
            <img src="../img/LOGO.png" alt="TR" class="logo">
        </div>

        <div class="container">
            
            <form class="login-form" method="post">

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre">

                <div id="corre">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="text" id="correo" name="correo" placeholder="tucorreo@ejemplo.com">
                </div>

                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">
        
                <label for="pais">País:</label>

                <select id="pais" name="pais" class="pais" >
                    <option value=""></option>
                    <option value="Chile">Chile</option>
                    <option value="Méxic">México</option>
                    <option value="Argentina">Argentina</option>
                </select>
                <?php 
                    include('../php/registrar_user.php');
                ?>
                    
                <button type="submit" onclick="ValidarCorreo()" name="boton">Registrarse</button>
                    
            </form>
            <p class="par">¿Ya tienes una cuenta? <a href="../html/login.php">Iniciar Sesion</a></p>
                
            
        </div>

    </main>
</body>
</html>
