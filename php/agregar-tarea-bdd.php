<?php
    include ('conex.php');

    if(isset($_POST['titulo'])){
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $correo = $_POST['correo'];
        $fecha = $_POST['fecha'];  
        $id_estado = $_POST['id_estado'];      

        $consulta = "INSERT into tareas(titulo,descripcion,correo,fecha,id_estado) VALUES ('$titulo','$descripcion','$correo','$fecha','$id_estado')";
        $resultado = mysqli_query($conex,$consulta);

    }
?>