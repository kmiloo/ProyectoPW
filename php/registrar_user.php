<?php

include ("conexion.php");


// REGISTRA CREAR CUENTAS 
if(isset($_POST['boton'])){
    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contrasena']) >= 1 && strlen($_POST['pais']) >= 1){

        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $contrasena = trim($_POST['contrasena']);
        $pais = trim($_POST['pais']);

        // Validación de correo electrónico
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            ?>
            <p style="color: rgb(217,48,37);">Correo electrónico no válido.</p>
            <?php
        } else if (correoYaExiste($conex, $correo)) {
            ?>
            <p style="color: rgb(217,48,37);">El correo ya esta registrado, Intente con uno nuevo o inicie sesion.</p>
            <?php
        } else {
            // Contraseña mínima de 6 caracteres (puedes ajustar este requisito según tus necesidades)
            if (strlen($contrasena) < 6) {
                ?>
                <p style="color: rgb(217,48,37);">La contraseña debe tener al menos 6 caracteres.</p>
                <?php
            } else {
                // Inserta los datos en la base de datos
                $consulta = "INSERT INTO usuarios(nombre, correo, contrasena, pais) VALUES ('$nombre','$correo','$contrasena','$pais')";
                $resultado = mysqli_query($conex, $consulta);

                // if($resultado){
                //     header("Location: login.php");
                //     if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //         $destinatario = $_POST["correo"];
                //         $asunto = "Creacion de cuenta exitoso"
                //         $mensaje = "Se ah creado una cuenta en tr gestor de tareas"
                    
                //         $headers = "From: trgestordetareas@gmail.com";
                //         //se envia el mail
                //         mail($destinatario, $asunto, $mensaje, $headers);
                          
                //     }

                // }

            }
        }
    } else {
        ?>
        <p style="color: rgb(217,48,37);">Por favor, complete todos los campos.</p>
        <?php
    }
}

// Función para verificar si el correo ya existe en la base de datos
function correoYaExiste($conexion, $correo) {
    $consulta = "SELECT correo FROM usuarios WHERE correo = '$correo'";
    $resultado = mysqli_query($conexion, $consulta);
    
    if (mysqli_num_rows($resultado) > 0) {
        return true; // El correo ya existe en la base de datos
    } else {
        return false; // El correo no existe en la base de datos
    }
}





?>