<?php
/*
Ejercicio 2 creacion de una bd con mysqli
*/

$server="localhost";//nombre del server
$usuario="root";//Usuario
$password="root";//contraseña


$conexion= new mysqli($server,$usuario,$password); //creamos nuestra conexion tipo mysqli

//probamos que la conexion sea exitosa
if($conexion->connect_error){
    die("Opps ha ocurrido un error al tratar de conectar".$conexion->connect_error);//si falla mandamos error
}else{
    echo "Conexion exitosa";//si no confimamos que la conexion ha sido exitosa
}

//sentencia para crear una base de datos
$sentenciaSQL="CREATE DATABASE basededatosPractica";

if($conexion->query($sentenciaSQL)==TRUE){//si se ejecuta la sentencia sentenicaSQL entonces :
    echo "Base de datos creada con exito :)";
}else{
    die("Opps , ha ocurrido un error al crear la Base de datos".$conexion->error); //si no , mandamos el error
}

?>