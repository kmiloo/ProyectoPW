<?php
include("conexion.php");
session_start();

if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    // Mostrar el ID de la sesión

    if (isset($_POST['actualizar'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $pais = $_POST['pais'];

        // Preparar y ejecutar una consulta SQL para actualizar los datos del usuario
        $sql = "UPDATE usuarios SET nombre = '$nombre', correo = '$correo', contrasena = '$contrasena', pais = '$pais' WHERE id = $id";

        if (mysqli_query($conex, $sql)) {
            //echo "Datos actualizados con éxito.";
            echo "<script>window.location.href = 'login.php';</script>";
        } else {
            //echo "Error al actualizar los datos: " . mysqli_error($conexion);
        }
    }
} else {
    // Manejar el caso en que el usuario no ha iniciado sesión o no tiene un ID en la sesión
    echo "Usuario no autenticado.";
}
?>
