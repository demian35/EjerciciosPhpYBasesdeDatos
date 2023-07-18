<?php
include("conexion.php");

//uso de funcion prepare que recibe la sentencia a ejecutar
$sql=$conexion->prepare("INSERT INTO alumnos (id, nombre, email) VALUES (null, ?, ?)");

$sql->bind_param("ss",$nombre,$email);//le mandamos los datos a registrar por medio de bind_param le enviaremos dos cadenas "ss"

//le pasamos los valores de los datos a agregar
$nombre="Demian Salgado";
$email="jdem@gmail.com";
$sql->execute();//ejecutamos la sentencia

$nombre="Claire Redfield";
$email="clairerd@live.com";
$sql->execute();//ejecutamos la sentencia


$sql->close();
?>