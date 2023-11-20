<?php
    include ('conex.php');

    $id =  $_POST['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $correo = $_POST['correo'];
    $fecha = $_POST['fecha'];
    $id_estado = $_POST['id_estado'];
    
    $consulta = "UPDATE tareas SET titulo = '$titulo', descripcion = '$descripcion', correo = '$correo', fecha = '$fecha', id_estado = '$id_estado' WHERE id = '$id' ";
    $resultado = mysqli_query($conex, $consulta);

    if(!$resultado){
        die('ERROR');
    }else{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $destinatario = $correo;
            $asunto = "Se ah actualizado una tarea";
            $mensaje = 'Se ah actualizado la tarea numero: '.$id;

            $headers = "From: trgestordetareas@gmail.com";
            //envia el correo
            mail($destinatario, $asunto, $mensaje, $headers);
        }
        
    }




    

?>