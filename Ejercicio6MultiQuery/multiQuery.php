<?php
include("conexion.php");

//sentencia para insertar tres datos con . y ; 
$sentenciaSQL="INSERT INTO alumnos (id, nombre, email) VALUES (null, 'Isacc Clarke', 'clarke@live.com');";
$sentenciaSQL.="INSERT INTO alumnos (id, nombre, email) VALUES (null, 'Leon Kennedy ', 'leonsK@rpd.com');";
$sentenciaSQL.="INSERT INTO alumnos (id, nombre, email) VALUES (null, 'Carl Johnson ', 'cjgrove4lve@hotmail.com');";


if($conexion->multi_query($sentenciaSQL)==TRUE){//si se ejecuta la sentencia sentenicaSQL entonces :
    $id=$conexion->insert_id;//recuperamos el id de algun elemento que insertemos
    echo "Insercion ejecutada con exito :)".$id;
}else{
    die("Opps , ha ocurrido un error al insertar".$conexion->error); //si no , mandamos el error
}
$conexion->close();//cerramos la conexion
?>

?>