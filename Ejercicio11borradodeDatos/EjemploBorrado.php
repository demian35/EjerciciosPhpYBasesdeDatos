<?php
include("conexion.php");

$sql="DELETE FROM alumnos where id>6";//sentencia para el borrodado de todos los datos que su id>6

if($conexion->query($sql)==TRUE){//si se ejecuta la sentencia entonces imprimimos que se borro con exito
    echo "Datos eliminados con exito";
}else{
    die("Error al borrar los datos ".$conexion->error);//si hay error imprimimos el error
}

?>