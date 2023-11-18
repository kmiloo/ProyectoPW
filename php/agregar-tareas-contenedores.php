<?php
    include ('conex.php');

    session_start();
    
    if (isset($_SESSION['correo'])){

        $correo = $_SESSION['correo'];

        
        $consulta = "SELECT * from tareas WHERE correo = '$correo'" ;
        $resultado = mysqli_query($conex, $consulta);

        if(!$resultado){
            die('FALLO CONSULTA'.mysqli_error($conex));
        }

        $json = array();
        while($row = mysqli_fetch_array($resultado)){
            $json[] = array(
                'titulo' => $row['titulo'],
                'descripcion' => $row['descripcion'],
                'correo' => $row['correo'],
                'id_estado' => $row['id_estado'],
                'id' => $row['id'],
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }







    

?>