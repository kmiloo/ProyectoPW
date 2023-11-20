<?php
    include ('conex.php');

    if(isset($_POST['id'])){

        $id = $_POST['id'];

        $consulta = "SELECT * FROM tareas WHERE id = $id";
        $resultado = mysqli_query($conex, $consulta);

        if(!$resultado){
            die('ERROR borrado');
        }else{
            $json = array();
            while($row = mysqli_fetch_array($resultado)){
                $json[] = array(
                    'titulo' => $row['titulo'],
                    'descripcion' => $row['descripcion'],
                    'correo' => $row['correo'],
                    'fecha' => $row['fecha'],
                    'id_estado' => $row['id_estado'],
                    'id' => $row['id'],
                );
            }
            $jsonstring = json_encode($json[0]);
            echo $jsonstring;
        }


    }else{
        echo 'id no econtroado';
    }



    

?>