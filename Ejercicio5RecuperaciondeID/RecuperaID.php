<?php
include("conexion.php");

//sentencia para insertar un dato
$sentenciaSQL="INSERT INTO alumnos (id, nombre, email) VALUES (null, 'Elizabeth Comstock ', 'misscolumbia@live.com');;";

if($conexion->query($sentenciaSQL)==TRUE){//si se ejecuta la sentencia sentenicaSQL entonces :
    $id=$conexion->insert_id;//recuperamos el id de algun elemento que insertemos
    echo "Insercion ejecutada con exito :)".$id;
}else{
    die("Opps , ha ocurrido un error al insertar".$conexion->error); //si no , mandamos el error
}
$conexion->close();//cerramos la conexion
?>

?>