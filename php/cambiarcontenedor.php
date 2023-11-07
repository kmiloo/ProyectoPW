<?php
include ("conexion.php");


$t = $_REQUEST["t"];

$contenedor = $_REQUEST["cont"];
$sql1 = "SELECT id_estado FROM tareas WHERE titulo = '$t'";
$tarea = mysqli_query($conex, $sql1);
$cont_id = mysqli_query($conex, "SELECT id FROM estados WHERE estado='$contenedor'");
$sql2 = "UPDATE tareas SET id_estado = '$cont_id' WHERE titulo='$t'";
mysqli_query($conex, $sql2);


?>