<?php
include("conexion.php");

$sql="UPDATE alumnos SET nombre='Elizabeth Dewitt' WHERE id=2";//sentencia para la actualizacion del dato con el id=2

if($conexion->query($sql)==TRUE){//si se ejecuta la sentencia entonces imprimimos que se borro con exito
    echo "Datos acutalizados con exito";
}else{
    die("Error al editar el dato ".$conexion->error);//si hay error imprimimos el error
}

?>