<?php
    include ('conex.php');

    $id =  $_POST['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $correo = $_POST['correo'];
    $id_estado = $_POST['id_estado'];
    
    $consulta = "UPDATE tareas SET titulo = '$titulo', descripcion = '$descripcion', correo = '$correo', id_estado = '$id_estado' WHERE id = '$id' ";
    $resultado = mysqli_query($conex, $consulta);

    if(!$resultado){
        die('ERROR borrado');
    }else{
        echo 'TODO CORRRECTO';
    }




    

?>