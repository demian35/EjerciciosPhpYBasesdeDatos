<?php
/*
Ejercicio 2 creacion de una bd con mysqli
*/

$server="localhost";//nombre del server
$usuario="root";//Usuario
$password="root";//contraseña
$baseDeDatos="basededatospractica";//nombre de la base de datos en donde trabajaremos

$conexion= new mysqli($server,$usuario,$password,$baseDeDatos); //creamos nuestra conexion tipo mysqli

//probamos que la conexion sea exitosa
if($conexion->connect_error){
    die("Opps ha ocurrido un error al tratar de conectar".$conexion->connect_error);//si falla mandamos error
}else{
    echo "Conexion exitosa";//si no confimamos que la conexion ha sido exitosa
}

//sentencia para insertar un dato
$sentenciaSQL="INSERT INTO alumnos (id, nombre, email) VALUES (null, 'Booker Dewitt ', 'dewitt35@hotmail.com');;";

if($conexion->query($sentenciaSQL)==TRUE){//si se ejecuta la sentencia sentenicaSQL entonces :
    echo "Insercion ejecutada con exito :)";
}else{
    die("Opps , ha ocurrido un error al insertar".$conexion->error); //si no , mandamos el error
}

?>