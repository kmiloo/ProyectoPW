<?php
    include ('conex.php');

    $id = $_POST['id'];
    $id_estado = $_POST['id_estado'];
    
    $consulta = "UPDATE tareas SET id_estado = '$id_estado' WHERE id = '$id' ";
    $resultado = mysqli_query($conex, $consulta);

    if(!$resultado){
        die('ERROR');
    }else{
        //echo 'TODO CORRRECTO';
    }


?>