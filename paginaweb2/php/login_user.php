<?php

include ("conexion.php");


if(isset($_POST['login'])){
    if(strlen($_POST['correo']) >= 1 && strlen($_POST['contrasena']) >= 1){

        $correo = trim($_POST['correo']);
        $contrasena = trim($_POST['contrasena']);

        $consulta = "SELECT * FROM clientes WHERE correo = '$correo' AND contrasena = '$contrasena'";
        $resultado = mysqli_query($conex, $consulta);


        if($resultado && $fila = mysqli_fetch_assoc($resultado)){
            // El inicio de sesión es exitoso
            //echo "SE INICIO SESION.";
            echo "<script>window.location.href = 'index.php';</script>";

            exit();
        } else {
            // Las credenciales son incorrectas
            echo "Credenciales incorrectas. Inténtalo de nuevo.";
        }
        

    }else {
        // Algún campo está vacío
        ?>
            <p style="color: rgb(217,48,37);">Por favor, Complete todos los campos</p>
        <?php
    }
}






?>