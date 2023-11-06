<?php

if (isset($_SESSION['id'])){
    //correo anterior
    
    if(isset($_POST['guardar2'])){

        $titulo = trim($_POST['titulo2']);
        $descripcion = trim($_POST['descripcion2']);
        $email = trim($_POST['email2']);
        $id= trim($_POST['id']);


        $sql = "UPDATE tareas SET titulo = '$titulo', descripcion = '$descripcion', correo = '$email' WHERE id = $id";

        if(mysqli_query($conex, $sql)){
  
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $destinatario = $email;
                $asunto = "Se ah actualizado una tarea";
                $mensaje = 'Se ah actualizado la tarea numero: '.$id;

                $headers = "From: trgestordetareas@gmail.com";
                //envia el correo
                mail($destinatario, $asunto, $mensaje, $headers);
            }
        }
    }



}










?>

