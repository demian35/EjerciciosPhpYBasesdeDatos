<?php
echo "To do para tus tareas"."<br>";

$server="localhost";//nombre del server
$usuario="root";//Usuario
$password="root";//contraseña
$baseDeDatos="basededatospractica";//nombre de la base de datos en donde trabajaremos

$conexion= new mysqli($server,$usuario,$password,$baseDeDatos); //creamos nuestra conexion tipo mysqli

if($conexion->connect_error){
    die("Opps ha ocurrido un error al tratar de conectar".$conexion->connect_error);//si falla mandamos error
}

if($_POST){
    $tarea=$_POST['tarea'];
    //uso de funcion prepare que recibe la sentencia a ejecutar
    $sql=$conexion->prepare("INSERT INTO tareastodo (idtarea, nombretarea) VALUES (null, ?)");
    $sql->bind_param("s",$tarea);//le mandamos los datos a registrar por medio de bind_param le enviaremos dos cadenas "ss"
    $sql->execute();//ejecutamos la sentencia
    echo "Tarea registrada con exito"."<br>";

}

if($_GET){
    $deleteElem=$_GET['borrar'];//OBTENEMOS EL ID DEL DATO QUE QUEREMOS ELIMINAR
    $sql=$conexion->prepare("DELETE FROM tareastodo WHERE idtarea=? ");//SENTENCIA
    $sql->bind_param("s",$deleteElem);//le mandamos los datos a registrar por medio de bind_param le enviaremos dos cadenas "ss"
    $sql->execute();//ejecutamos la sentencia
    $mensaje = "Tarea eliminada con éxito";
}



$consulta="SELECT * FROM tareastodo;";//sentencia para consultar todos los registros de la bd
$resultado=$conexion->query($consulta);//ejecutamos la consulta
$datostarea=$resultado->fetch_all();//mostramos los registros
