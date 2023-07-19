<?php
include("conexion.php");

$sql="SELECT * FROM alumnos WHERE id>4 ORDER BY id desc";//consulta para mostrar todos los registros de la bd
//usamos el WHERE para buscar algun registro por un nombre en especifico y el order by desc para
//imprimir los registros de manera descendiente.

$resultados=$conexion->query($sql);//ejecutamos la consulta

if ($resultados->num_rows > 0) { //Regresamos todos los registros que se encuentren en reusultados
    echo "Registros encontrados"."<br>";
    while ($fila = $resultados->fetch_assoc()) {//recorremos cada fila para regresarlas en pantalla
        echo "Id: ".$fila['id'].""."Nombre: ".$fila['nombre'].""."email: ".$fila['email']."<br>";//imprimimos los datos
    }
} else {
    echo "No hay registros";
}


?>