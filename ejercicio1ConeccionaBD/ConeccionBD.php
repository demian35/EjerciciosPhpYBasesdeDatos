<?php
/*
Ejercicio 1 conexion a bd mysql mediante mysqli
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


?>