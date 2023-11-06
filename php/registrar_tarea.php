<?php

include ("conexion.php");

session_start();

if (isset($_SESSION['id'])){

    $id = $_SESSION['id'];

    $consulta_tarea = "SELECT * FROM tareas WHERE id_usuarios = $id";
    $resultado_tarea = mysqli_query($conex, $consulta_tarea);

    while ($fila = mysqli_fetch_assoc($resultado_tarea)) {
        $titulos = $fila['titulo'];
        $descripcions = $fila['descripcion'];

        $id_estado = $fila['id_estado']; // Obtener el estado de la tarea desde la base de datos

        // Determina el contenedor en función del estado de la tarea
        $contenedor = 1; // Valor predeterminado para "por hacer"

        if ($id_estado == 2) {
            $contenedor = 2;
        } elseif ($id_estado == 3) {
            $contenedor = 3;
        }
        

        // Genera el contenido de la carta de tarea con los datos de la base de datos
        echo '<div class="carta-tarea" draggable="true" data-codigo="' . $contenedor .'">' ;
        echo '<a href="#"><i class="fa-solid fa-x" ></i></a>';
        echo '<div class="carta-header">';
        echo '<h5 class="carta-titulo">' . $titulos . '</h5>';
        echo '<a href="#"><i id="edit" class="fas fa-edit"></i></a>';
        echo '</div>';
        echo '<div class="carta-texto">';
        echo '<p class="carta-texto">' . $descripcions . '</p>';
        echo '</div>';
        echo '<div class="carta-footer">';
        echo '<i class="fa-solid fa-circle-user"></i>';
        echo '</div>';
        echo '</div>';



    }





























    //se guardan tareas en bdd
    if(isset($_POST['guardar'])){
        if(strlen($_POST['titulo']) >= 1 && strlen($_POST['descripcion']) >= 1 && strlen($_POST['email']) >= 1){
            $titulo = trim($_POST['titulo']);
            $descripcion = trim($_POST['descripcion']);
            $email = trim($_POST['email']);

            $id_estado = trim($_POST['id_estado']);;

            // Consulta para obtener la ID del usuarios 
            $consulta_usuarios = "SELECT id FROM usuarios WHERE correo = '$email'";
            $resultado_usuarios = mysqli_query($conex, $consulta_usuarios);
    
            if ($resultado_usuarios && $fila = mysqli_fetch_assoc($resultado_usuarios)) {
                // Obtiene la ID del usuarios
                $id_usuarios = $fila['id'];
                echo 'id usuario es: '. $id_usuarios . 'id estad es: '.$id_estado;
    
                // Realiza la inserción en la tabla "cartas"
                $consulta2 = "INSERT INTO tareas(titulo, descripcion, correo, id_usuarios, id_estado) VALUES ('$titulo', '$descripcion', '$email', $id_usuarios, $id_estado)";
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

}



























?>