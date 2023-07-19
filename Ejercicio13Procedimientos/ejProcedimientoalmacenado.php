<?php
/*
Ejercicio 13 ejecucion de un procedimiento almacendado para consultar datos con php
*/

$server="localhost";//nombre del server
$usuario="root";//Usuario
$password="root";//contraseña
$baseDeDatos="basededatospractica";//nombre de la base de datos en donde trabajaremos

$conexion= new mysqli($server,$usuario,$password,$baseDeDatos); //creamos nuestra conexion tipo mysqli

$resultado=$conexion->query("CALL basededatospractica.obtenerNombrealumno();");//ejecutamos el procedimiento con la sentencia CALL

while ($fila = $resultado->fetch_assoc()) {//recorremos cada fila para regresarlas en pantalla
    echo "Dato : ".$fila['dato']."<br>";//imprimimos los datos
}

?>