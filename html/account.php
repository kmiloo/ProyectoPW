<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/acount.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Mi Cuenta</title>
</head>
<body>
    <?php
        include("../php/account.php");
    ?>
    <main>
        
        
        <div class="icono">
            <div class="flecha">
                <a href="index.php"><i class="fa-solid fa-arrow-left fa-3x"></i></a>
            </div>
                
            <i class="fa-regular fa-circle-user fa-5x"></i>

            <p></p>
    
        </div>

        
        <div class="container">
            <div class="contenedor">
                <h2>Datos de la cuenta</h2>

                <form method="post">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['nombre'];} ?>">    

                    <label for="correo">Correo Electrónico:</label>
                    <input type="text" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['correo'];} ?>">
        
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['contrasena'];} ?>">
        
                    <label for="pais">País:</label>
                    <select id="pais" name="pais" class="pais">
                        <option value="<?php if(isset($_SESSION['id'])){echo $_SESSION['pais'];} ?>"><?php if(isset($_SESSION['id'])){echo $_SESSION['pais'];} ?></option>
                        <option value="Chile">Chile</option>
                        <option value="México">México</option>
                        <option value="Argentina">Argentina</option>
                    </select>
        
                    <button type="submit" name="actualizar">Actualizar Datos</button>
                </form>

            </div>
        </div>
    </main>
    


</body>
</html>