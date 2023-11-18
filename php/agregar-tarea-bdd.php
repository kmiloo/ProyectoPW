<?php
    include ('conex.php');

    if(isset($_POST['titulo'])){
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $correo = $_POST['correo'];
        $id_estado = $_POST['id_estado'];      

        $consulta = "INSERT into tareas(titulo,descripcion,correo,id_estado) VALUES ('$titulo','$descripcion','$correo','$id_estado')";
        $resultado = mysqli_query($conex,$consulta);

        //quitar
        if(!$resultado){
            die('fallo');
        }else{
            echo 'BIEN';
        }
    }

?>