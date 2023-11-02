<?php

include ("conexion.php");
//para guardar tareas
if(isset($_POST['guardar'])){
    if(strlen($_POST['titulo']) >= 1 && strlen($_POST['descripcion']) >= 1 && strlen($_POST['email']) >= 1){
        $titulo = trim($_POST['titulo']);
        $descripcion = trim($_POST['descripcion']);
        $email = trim($_POST['email']);

        // Consulta para obtener la ID del cliente 
        $consulta_cliente = "SELECT id FROM clientes WHERE correo = '$email'";
        $resultado_cliente = mysqli_query($conex, $consulta_cliente);

        if ($resultado_cliente && $fila = mysqli_fetch_assoc($resultado_cliente)) {
            // Obtiene la ID del cliente
            $id_cliente = $fila['id'];

            // Realiza la inserción en la tabla "cartas"
            $consulta2 = "INSERT INTO cartas(titulo, descripcion, correo, id_cliente) VALUES ('$titulo', '$descripcion', '$email', $id_cliente)";
            $resultado2 = mysqli_query($conex, $consulta2);

            //si resulta la consulta
            if($resultado2){
                ?>
                <h3 class="ok">SE HAN GUARDADO LOS DATOS</h3>
                
                <?php
            } else {
                ?>
                <h3 class="bad">NO SE HAN GUARDADO LOS DATOS</h3>
                <?php
            }
        }else {
            
            ?>
            <h3 class="bad">El correo no se encuentra en la base de datos </h3>
            <?php
        }
        }else {
        ?>
        <h3 class="bad">COMPLETE LOS CAMPOS</h3>
        <?php
        }
}

//hacer para agregar tareas ya en la base de datos
?>