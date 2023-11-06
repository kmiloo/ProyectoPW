<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    
    <title>Mi Cuenta</title>
</head>
<body>
    <main>
            <div class="icono">
                <img src="../img/LOGO.png" alt="TR" class="logo">
            </div>

        <div class="container">
            
                <form method="post">
                    <?php
                        include("../php/registrar_user.php");
                    ?>
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
                        <option value="es">Chile</option>
                        <option value="mx">México</option>
                        <option value="ar">Argentina</option>
                    </select>
                    
                    <button type="submit" name="boton" >Registrarse</button>
                    
                </form>
                
            
        </div>
    </main>
</body>
</html>
