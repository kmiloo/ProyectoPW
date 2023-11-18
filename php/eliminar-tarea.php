<?php
    include ('conex.php');

    if(isset($_POST['id'])){

        $id = $_POST['id'];

        $consulta = "DELETE  from tareas WHERE id = $id";
        $resultado = mysqli_query($conex, $consulta);

        if(!$resultado){
            die('ERROR borrado');
        }else{
            echo 'no error';
        }

    }else{
        echo 'id no econtroado';
    }



    

?>