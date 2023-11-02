<?php

include ("conexion.php");
session_abort();

if(isset($_POST['login'])){
    if(strlen($_POST['correo']) >= 1 && strlen($_POST['contrasena']) >= 1){

        $correo = trim($_POST['correo']);
        $contrasena = trim($_POST['contrasena']);

        $consulta = "SELECT * FROM clientes WHERE correo = '$correo' AND contrasena = '$contrasena'";
        $resultado = mysqli_query($conex, $consulta);


        if($resultado && $fila = mysqli_fetch_assoc($resultado)){
            // El inicio de sesión es exitoso
            $consulta_datos = "SELECT * FROM clientes WHERE correo = '$correo'";
            $resultado_datos = mysqli_query($conex, $consulta);

            session_start();
            $_SESSION['nombre'] = $fila['nombre'];
            $_SESSION['contrasena'] = $fila['contrasena'];
            $_SESSION['correo'] = $fila['correo'];
            $_SESSION['pais'] = $fila['pais'];
            $estadoSesion = session_status();
            echo 'Estado de la sesión: ' . $estadoSesion;


            // $nombre = $_POST['nombre'];
            // $correo = $_POST['correo'];
            // $contrasena = $_POST['contrasena'];
            // $pais = $_POST['pais'];
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