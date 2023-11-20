<?php

include ("conex.php");
session_reset();


if(isset($_POST['login'])){
    if(strlen($_POST['correo']) >= 1 && strlen($_POST['contrasena']) >= 1){

        $correo = trim($_POST['correo']);
        $contrasena = trim($_POST['contrasena']);

        $consulta = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
        $resultado = mysqli_query($conex, $consulta);


        if($resultado && $fila = mysqli_fetch_assoc($resultado)){
            // El inicio de sesión es exitoso
            //echo "SE INICIO SESION.";

            session_start();
            $_SESSION['id'] = $fila['id'];
            $_SESSION['nombre'] = $fila['nombre'];
            $_SESSION['correo'] = $fila['correo'];
            $_SESSION['contrasena'] = $fila['contrasena'];
            $_SESSION['pais'] = $fila['pais'];
            echo "<script>window.location.href = 'index.php';</script>";

            exit();
        } else {
            // Las credenciales son incorrectas
            ?>
                <p style="color: rgb(217,48,37);">Credenciales incorrectas. Inténtalo de nuevo.</p>
            <?php
        }
        
        

    }else {
        // Algún campo está vacío
        ?>
            <p style="color: rgb(217,48,37);">Por favor, Complete todos los campos</p>
        <?php
    }
}


?>